<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\Auth;

class HomePageFactory extends PostFactory
{
    protected $db;

    public function __construct($db = null)
    {
        parent::__construct();
        $this->db = $db ?: DB::connection()->getPdo();
    }

    public function globalSearch(array $criteria = []): array
    {
        $query = $criteria['search'] ?? '';
        if (empty($query)) {
            return [];
        };

        $indexes = ['posts', 'accounts'];
        $page = $criteria['page'] ?? 1;
        $pageSize = $criteria['page_size'] ?? 10;
        $offset = ($page - 1) * $pageSize;
        $sortBy = $criteria['sort_by'] ?? 'created_at';
        $sortOrder = $criteria['sort_order'] ?? 'desc';
        $filters = $criteria['filters'] ?? [];

        $categorizedResults = [];

        foreach ($indexes as $indexName) {
            $indexFilters = $filters;

            if ($indexName === 'accounts') {
                $indexFilters['state'] = $criteria['state'] ?? null;
                $indexFilters['local_government'] = $criteria['local_government'] ?? null;
                $indexFilters['id'] = $criteria['representative_id'] ?? null;
                $indexFilters['account_type'] = 'representative';
            }

            if ($indexName === 'posts') {
                $indexFilters['author_state'] = $criteria['state'] ?? null;
                $indexFilters['author_local_government'] = $criteria['local_government'] ?? null;
                $indexFilters['author_id'] = $criteria['representative_id'] ?? null;
            }

            $searchParams = [
                'filter' => $this->buildFilters($indexFilters),
                'limit' => (int) $pageSize,
                'offset' => (int) $offset,
                # 'sort' => ["$sortBy:$sortOrder"],
                'attributesToRetrieve' => ['*'],
            ];

            $results = app('search')->search($indexName, $query, $searchParams);
            $hits = $results['hits'] ?? [];
            $totalCount = $results['nbHits'] ?? 0;

            foreach ($hits as &$hit) {
                if ($indexName === 'posts' && isset($hit['media'])) {
                    $postInteractionData = PostResource::getPostInteractionData($hit['id'], Auth::id());

                    $hit['likes'] = $postInteractionData['likes_count'];
                    $hit['reposts'] = $postInteractionData['reposts_count'];
                    $hit['bookmarks'] = $postInteractionData['bookmarks_count'];
                    $hit['current_user_liked'] = $postInteractionData['current_user_liked'];
                    $hit['current_user_reposted'] = $postInteractionData['current_user_reposted'];
                    $hit['current_user_bookmarked'] = $postInteractionData['current_user_bookmarked'];

                    $hit['media'] = json_decode($hit['media'], true);
                    if (isset($hit['target_representatives'])) {
                        if (is_string($hit['target_representatives'])) {
                            $hit['target_representatives'] = json_decode($hit['target_representatives'], true);
                        }
                    }
                    if ($hit['post_type'] === 'eyewitness') {
                        unset($hit['target_representatives']);
                    }
                }
            }

            $categorizedResults[$indexName] = [
                'data' => $hits,
                'meta' => [
                    'total' => (int) $totalCount,
                    'current_page' => (int) $page,
                    'last_page' => (int) ceil($totalCount / $pageSize),
                    'page_size' => (int) $pageSize,
                ],
            ];
        }

        return $categorizedResults;
    }

    public function getCommunityPosts(array $criteria = [])
    {
        try {
            $page = $criteria['page'] ?? 1;
            $pageSize = $criteria['page_size'] ?? 10;
            $offset = ($page - 1) * $pageSize;
            $query = $criteria['search'] ?? '';
            $sortBy = $criteria['sort_by'] ?? 'created_at';
            $sortOrder = $criteria['sort_order'] ?? 'desc';

            $filters = [
                'status' => $criteria['status'] ?? null,
                'category' => $criteria['category'] ?? null,
                'post_type' => $criteria['post_type'] ?? null,
                'author_state' => $criteria['author_state'] ?? null,
                'author_local_government' => $criteria['author_local_government'] ?? null,
                'author_constituency' => $criteria['author_constituency'] ?? null,
            ];

            $searchParams = [
                'filter' => $this->buildFilters($filters),
                'limit' => (int) $pageSize,
                'offset' => (int) $offset,
                'sort' => ["$sortBy:$sortOrder"],
                'attributesToRetrieve' => ['*'],
            ];

            $results = app('search')->search('posts', $query, $searchParams);
            $hits = $results['hits'] ?? [];

            $totalCount = $results['nbHits'] ?? 0;
            $lastPage = ceil($totalCount / $pageSize);

            foreach ($hits as &$hit) {
                if (
                    isset($hit['target_representatives']) &&
                    is_string($hit['target_representatives'])
                ) {
                    $hit['target_representatives'] = json_decode(
                        $hit['target_representatives'],
                        true
                    );
                }
            }

            return [
                'data' => $hits,
                'total' => $totalCount,
                'current_page' => $page,
                'last_page' => $lastPage,
                'page_size' => (int) $pageSize,
            ];
        } catch (\Exception $e) {
            Log::error('Error fetching posts from meillisearch: ' . $e->getMessage());
            $this->getPosts($criteria);
        }
    }

    private function getLgDistrictAndConstituency(string $localGovernment, ?int $stateId)
    {
        $query = "
			SELECT
				d.name AS district_name,
				c.name AS constituency_name
			FROM local_governments lg
			LEFT JOIN districts d ON lg.district_id = d.id
			LEFT JOIN constituencies c ON lg.constituency_id = c.id
			WHERE lg.name = ? AND lg.state_id = ?
			LIMIT 1
		";

        return DB::selectOne($query, [$localGovernment, $stateId]);
    }

    private function getStateIdByName(string $stateName): ?int
    {
        $query = "SELECT id FROM states WHERE name = ? LIMIT 1";

        $state = DB::selectOne($query, [$stateName]);

        return $state ? (int) $state->id : null;
    }

    public function getRepresentatives(array $criteria = [])
    {
        try {
            $page = $criteria['page'] ?? 1;
            $pageSize = $criteria['page_size'] ?? 10;
            $offset = ($page - 1) * $pageSize;
            $query = $criteria['search'] ?? '';
            $sortBy = $criteria['sort_by'] ?? 'created_at';
            $sortOrder = $criteria['sort_order'] ?? 'desc';

            $filters = [
                'account_type' => 'representative',
            ];

            if (!empty($criteria['party'])) {
                $filters['party'] = $criteria['party'];
            }

            if (!empty($criteria['position'])) {
                $filters['position'] = $criteria['position'];
            }

            if (!empty($criteria['local_government'])) {
                $filters['position_level'] = [3, 4, 5];
                if (!empty($criteria['state'])) {
                    $filters['state'] = $criteria['state'];
                }
            } elseif (!empty($criteria['state'])) {
                $filters['state'] = $criteria['state'];
                $filters['position_level'] = [2, 3, 4, 5];
            }

            Log::info('Search criteria:', $criteria);

            $searchParams = [
                'filter' => $this->buildFilters($filters),
                'limit' => (int) $pageSize,
                'offset' => (int) $offset,
                'sort' => ["$sortBy:$sortOrder"],
                'attributesToRetrieve' => ['*'],
            ];

            $results = app('search')->search('accounts', $query, $searchParams);
            $hits = $results['hits'] ?? [];

            // Post-filtering by district derived from local_government
            if (!empty($criteria['local_government']) && !empty($criteria['state'])) {
                $stateId = $this->getStateIdByName($criteria['state']);
                $targetLgInfo = $this->getLgDistrictAndConstituency($criteria['local_government'], $stateId);

                if ($targetLgInfo && $targetLgInfo->district_name) {
                    $hits = array_filter($hits, function ($hit) use ($targetLgInfo, $stateId) {
                        // Skip if hit has no local_government
                        if (!isset($hit['local_government'])) {
                            return false;
                        }

                        // Get district for this hit's local_government from database
                        $hitLgInfo = $this->getLgDistrictAndConstituency($hit['local_government'], $stateId);

                        if (!$hitLgInfo || !$hitLgInfo->district_name) {
                            return false;
                        }

                        // Match only if districts are the same
                        return $hitLgInfo->district_name === $targetLgInfo->district_name;
                    });
                    $hits = array_values($hits); // Re-index array after filtering
                }
            }

            $totalCount = count($hits); // Update total count after filtering
            $lastPage = ceil($totalCount / $pageSize);

            return [
                'data' => array_slice($hits, $offset, $pageSize), // Apply pagination after filtering
                'total' => $totalCount,
                'current_page' => $page,
                'last_page' => $lastPage,
                'page_size' => (int) $pageSize,
            ];
        } catch (\Exception $e) {
            Log::error('Error fetching representatives from Meilisearch: ' . $e->getMessage());
            return $this->getRepresentativesFromDatabase($criteria);
        }
    }

    public function getRepresentativesFromDatabase($criteria)
    {
        $page = $criteria['page'] ?? 1;
        $pageSize = $criteria['page_size'] ?? 10;
        $offset = ($page - 1) * $pageSize;
        $params = [2];

        $query = '
		SELECT a.id, a.name, a.account_type, a.photo_url, s.name AS state,
		l.name As local_government, p.title AS position , pa.name AS party,
	   	c.name AS constituency
		FROM accounts a
		JOIN representatives r ON r.account_id = a.id
		LEFT JOIN states s ON a.state_id = s.id
		LEFT JOIN local_governments l ON a.local_government_id = l.id
		LEFT JOIN positions p ON r.position_id = p.id
		LEFT JOIN parties pa ON r.party_id = pa.id
		LEFT JOIN constituencies c ON r.constituency_id = c.id
		WHERE a.account_type = ?';

        list($query, $params) = $this->applyFilters($query, $params, $criteria, 'representative');
        $query = $this->applySorting($query, $criteria);

        $query .= " LIMIT ? OFFSET ?";
        $params[] = (int) $pageSize;
        $params[] = (int) $offset;

        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute($params);
            $representatives = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            // Count total records for pagination
            $countQuery = '
			SELECT COUNT(*) AS total
			FROM accounts a
			JOIN representatives r ON r.account_id = a.id
			WHERE a.account_type = ?';
            $countParams = [2];

            list($countQuery, $countParams) = $this->applyFilters($countQuery, $countParams, $criteria);

            $totalCountStmt = $this->db->prepare($countQuery);
            $totalCountStmt->execute($countParams);
            $totalCount = $totalCountStmt->fetchColumn();

            return [
                'data' => $representatives,
                'total' => $totalCount,
                'current_page' => $page,
                'last_page' => ceil($totalCount / $pageSize),
            ];
        } catch (\Exception $e) {
            Log::error('Error fetching representatives: ' . $e->getMessage());
            return [];
        }
    }

    protected function buildFilters(array $filters): string
    {
        $meiliFilters = [];
        $specialFields = ['local_government', 'constituency', 'district',
            'author_state', 'author_local_government', 'author_constituency'];
        $specialFieldFilters = [];

        foreach ($filters as $field => $value) {
            if (in_array($field, $specialFields)) {
                // Collect the OR conditions for special fields
                if (is_array($value) && !empty($value)) {
                    $filteredValues = array_filter($value, fn ($v) => !is_null($v));
                    if (!empty($filteredValues)) {
                        $specialFieldFilters[] = "$field IN [" . implode(
                            ',',
                            array_map(fn ($v) => "\"$v\"", $filteredValues)
                        ) . "]";
                    }
                } elseif (!is_null($value) && $value !== '') {
                    $specialFieldFilters[] = "$field = \"$value\"";
                }
            } else {
                // Handle other fields with AND
                if (is_array($value) && !empty($value)) {
                    $filteredValues = array_filter($value, fn ($v) => !is_null($v));
                    if (!empty($filteredValues)) {
                        $meiliFilters[] = "$field IN [" . implode(
                            ',',
                            array_map(fn ($v) => "\"$v\"", $filteredValues)
                        ) . "]";
                    }
                } elseif (!is_null($value) && $value !== '') {
                    $meiliFilters[] = "$field = \"$value\"";
                }
            }
        }

        // Combine the AND and OR conditions
        $result = implode(' AND ', $meiliFilters);
        if (!empty($specialFieldFilters)) {
            $result .= (empty($result) ? '' : ' AND ') . '(' . implode(' OR ', $specialFieldFilters) . ')';
        }

        Log::info($result);
        return $result;
    }


    private function applyFilters($query, $params, array $criteria, $context = 'representative')
    {
        $search = $criteria['search'] ?? null;
        $stateFilter = $criteria['state'] ?? null;
        $positionFilter = $criteria['position'] ?? null;
        $localGovtFilter = $criteria['local_government'] ?? null;
        $titleFilter = $criteria['title'] ?? null;
        $contentFilter = $criteria['content'] ?? null;

        if ($search) {
            if ($context === 'representative') {
                $query .= ' AND (a.name LIKE ? OR a.email LIKE ? OR a.phone_number LIKE ?)';
                $params = array_merge($params, array_fill(0, 3, '%' . $search . '%'));
            } elseif ($context === 'post') {
                $query .= ' AND (p.title LIKE ? OR p.content LIKE ?)';
                $params = array_merge($params, array_fill(0, 2, '%' . $search . '%'));
            }
        }

        if ($context === 'representative') {
            if ($stateFilter) {
                $query .= ' AND a.state = ?';
                $params[] = $stateFilter;
            }

            if ($positionFilter) {
                $query .= ' AND r.position = ?';
                $params[] = $positionFilter;
            }

            if ($localGovtFilter) {
                $query .= ' AND a.local_government = ?';
                $params[] = $localGovtFilter;
            }
        } elseif ($context === 'post') {
            if ($titleFilter) {
                $query .= ' AND p.title LIKE ?';
                $params[] = '%' . $titleFilter . '%';
            }

            if ($contentFilter) {
                $query .= ' AND p.content LIKE ?';
                $params[] = '%' . $contentFilter . '%';
            }
        }

        return [$query, $params];
    }

    private function applySorting($query, array $criteria)
    {
        $sortBy = $criteria['sort_by'] ?? 'created_at';
        $sortOrder = $criteria['sort_order'] ?? 'desc';

        $allowedSortColumns = ['created_at', 'name', 'constituency', 'state'];
        $allowedSortOrders = ['asc', 'desc'];

        if (in_array($sortBy, $allowedSortColumns) && in_array($sortOrder, $allowedSortOrders)) {
            $query .= " ORDER BY {$sortBy} {$sortOrder}";
        }

        return $query;
    }

}
