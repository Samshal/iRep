<?php

namespace Database\Factories;

use Illuminate\Support\Facades\DB;

class CommentFactory extends BaseFactory
{
    protected $db;

    public function __construct($db = null)
    {
        parent::__construct();
        $this->db = $db ?: DB::connection()->getPdo();
    }

    public function insertComment($data)
    {
        $query = "
		INSERT INTO comments
		(post_id, account_id, comment, parent_id, supporter)
		VALUES (?, ?, ?, ?, ?)";

        $supporter = isset($data['supporter']) && $data['supporter'] ? 1 : 0;

        $stmt = $this->db->prepare($query);
        $stmt->execute([
            $data['postId'],
            $data['accountId'],
            $data['comment'],
            $data['parentId'] ?? null,
            $supporter,
        ]);

        return $this->db->lastInsertId();
    }

    public function getComment($id)
    {
        $query = "
		SELECT comments.*, accounts.id AS author_id,
		accounts.photo_url AS author_photo_url, accounts.name AS author_name
        FROM comments
        LEFT JOIN accounts ON comments.account_id = accounts.id
        WHERE comments.id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);

        return $stmt->fetchObject();
    }

    public function getPostComments($postId, $criteria = [])
    {
        $page = isset($criteria['page']) ? (int) $criteria['page'] : 1;
        $pageSize = isset($criteria['page_size']) ? (int) $criteria['page_size'] : 10;
        $commentId = isset($criteria['comment_id']) ? (int) $criteria['comment_id'] : null;
        $offset = ($page - 1) * $pageSize;

        // Query to get the total count of comments
        $countQuery = "
		SELECT COUNT(*) as total
		FROM comments
		WHERE post_id = ?
		  AND (parent_id " . ($commentId ? "= ?" : "IS NULL") . ")";

        $countStmt = $this->db->prepare($countQuery);
        $countStmt->bindParam(1, $postId, \PDO::PARAM_INT);
        if ($commentId) {
            $countStmt->bindParam(2, $commentId, \PDO::PARAM_INT);
        }
        $countStmt->execute();
        $total = $countStmt->fetchColumn();

        // Query to get the comments with the total number of replies for each comment
        $query = "
		SELECT comments.*, accounts.id AS author_id,
			   accounts.photo_url AS author_photo_url, accounts.name AS author_name,
			   COALESCE(reply_counts.reply_count, 0) AS total_replies
		FROM comments
		LEFT JOIN accounts ON comments.account_id = accounts.id
		LEFT JOIN (
			SELECT parent_id, COUNT(*) AS reply_count
			FROM comments
			GROUP BY parent_id
		) AS reply_counts ON comments.id = reply_counts.parent_id
		WHERE comments.post_id = ?
		  AND (comments.parent_id " . ($commentId ? "= ?" : "IS NULL") . ")
		ORDER BY comments.commented_at
		LIMIT ? OFFSET ?";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(1, $postId, \PDO::PARAM_INT);

        if ($commentId) {
            $stmt->bindParam(2, $commentId, \PDO::PARAM_INT);
            $stmt->bindParam(3, $pageSize, \PDO::PARAM_INT);
            $stmt->bindParam(4, $offset, \PDO::PARAM_INT);
        } else {
            $stmt->bindParam(2, $pageSize, \PDO::PARAM_INT);
            $stmt->bindParam(3, $offset, \PDO::PARAM_INT);
        }

        $stmt->execute();
        $comments = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return [
            'data' => $comments,
            'meta' => [
                'current_page' => $page,
                'page_size' => $pageSize,
                'total' => $total
            ]
        ];
    }

    public function getCommentsByUser($accountId, $criteria = [])
    {
        $page = isset($criteria['page']) ? (int)$criteria['page'] : 1;
        $pageSize = isset($criteria['page_size']) ? (int)$criteria['page_size'] : 10;
        $offset = ($page - 1) * $pageSize;

        $query = "
		SELECT comments.id AS comment_id,
			   comments.comment,
			   accounts.id AS author_id,
			   accounts.photo_url AS author_photo_url,
			   accounts.name AS author_name,
			   CASE
				   WHEN parent_comments.id IS NOT NULL THEN JSON_OBJECT(
					   'type', 'comment',
					   'id', parent_comments.id,
					   'comment', parent_comments.comment,
					   'commented_at', parent_comments.commented_at,
					   'author_id', parent_author.id,
					   'author_name', parent_author.name,
					   'author_photo_url', parent_author.photo_url
				   )
				   WHEN petitions.id IS NOT NULL THEN JSON_OBJECT(
					   'type', 'petition',
					   'id', posts.id,
					   'title', posts.title,
					   'context', posts.context,
					   'created_at', posts.created_at,
					   'author_id', post_author.id,
					   'author_name', post_author.name,
					   'author_photo_url', post_author.photo_url
				   )
				   WHEN eye_witness_reports.id IS NOT NULL THEN JSON_OBJECT(
					   'type', 'eyewitness',
					   'id', posts.id,
					   'title', posts.title,
					   'context', posts.context,
					   'created_at', posts.created_at,
					   'author_id', post_author.id,  -- Using creator_id from posts for eye_witness_reports
					   'author_name', post_author.name,
					   'author_photo_url', post_author.photo_url
				   )
				   ELSE JSON_OBJECT()
			   END AS commented_entity
		FROM comments
		LEFT JOIN accounts ON comments.account_id = accounts.id
		LEFT JOIN posts ON comments.post_id = posts.id
		LEFT JOIN petitions ON posts.id = petitions.post_id
		LEFT JOIN eye_witness_reports ON posts.id = eye_witness_reports.post_id
		LEFT JOIN comments AS parent_comments ON comments.parent_id = parent_comments.id
		LEFT JOIN accounts AS parent_author ON parent_comments.account_id = parent_author.id
		LEFT JOIN accounts AS post_author ON posts.creator_id = post_author.id
		WHERE comments.account_id = :accountId
		LIMIT :limit OFFSET :offset
		";

        $stmt = $this->db->prepare($query);

        $stmt->bindParam(':accountId', $accountId, \PDO::PARAM_INT);
        $stmt->bindParam(':limit', $pageSize, \PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, \PDO::PARAM_INT);
        $stmt->execute();

        $comments = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($comments as &$comment) {
            $comment['commented_entity'] = json_decode($comment['commented_entity'], true);
        }

        $countQuery = "
		SELECT COUNT(*) AS total
		FROM comments
		WHERE comments.account_id = :accountId
		";
        $countStmt = $this->db->prepare($countQuery);
        $countStmt->bindParam(':accountId', $accountId, \PDO::PARAM_INT);
        $countStmt->execute();
        $totalCount = $countStmt->fetch(\PDO::FETCH_ASSOC)['total'];

        $totalPages = ceil($totalCount / $pageSize);

        return [
            'data' => $comments,
            'meta' => [
                'total' => $totalCount,
                'current_page' => $page,
                'last_page' => $totalPages,
                'page_size' => $pageSize,
            ],
        ];
    }

    public function toggleAction($table, $postId, $accountId)
    {
        $status = null;

        if ($this->hasUserAction($table, $postId, $accountId)) {
            $deleteQuery = "
			DELETE FROM {$table}
			WHERE entity_id = ? AND account_id = ?";
            $stmt = $this->db->prepare($deleteQuery);
            $stmt->execute([$postId, $accountId]);
            $status = 'removed';
        } else {
            $insertQuery = "
			INSERT INTO {$table} (entity_type, entity_id, account_id)
			VALUES (?, ?, ?)";
            $stmt = $this->db->prepare($insertQuery);
            $stmt->execute(['post', $postId, $accountId]);
            $status = 'added';
        }

        return $status;
    }

    public function hasUserAction($table, $postId, $accountId)
    {
        $query = "
		SELECT COUNT(*)
		FROM {$table}
		WHERE entity_id = ? AND account_id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$postId, $accountId]);

        return $stmt->fetchColumn() > 0;
    }

    public function deleteComment($id)
    {
        $query = "
		DELETE FROM comments
		WHERE id = ?";

        $stmt = $this->db->prepare($query);
        $stmt->execute([$id]);
    }
}
