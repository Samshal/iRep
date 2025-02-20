<?php

namespace App\Services;

use Meilisearch\Client;
use Illuminate\Support\Facades\Log;

class SearchEngineService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client(env('MEILISEARCH_HOST'), env('MEILISEARCH_KEY'));
    }

    // Indexing data using raw SQL
    public function indexData(
        string $indexName,
        array $data,
        array $sortableAttributes = [],
        array $filterableAttributes = [],
        string|int|null $primaryKey = null,
    ): int {

        Log::info("Indexing data to Meilisearch: {$indexName}");
        $attempts = 3;
        $delay = 100;

        for ($i = 0; $i < $attempts; $i++) {
            try {
                $filteredData = app('utils')->filterNullValues($data);

                $index = $this->client->index($indexName);

                if ($primaryKey !== null) {
                    $index->update(['primaryKey' => $primaryKey]);
                }

                if (!empty($sortableAttributes)) {
                    $index->updateSortableAttributes($sortableAttributes);
                }

                if (!empty($filterableAttributes)) {
                    $index->updateFilterableAttributes($filterableAttributes);
                }

                $index->addDocuments($filteredData);

                return count($filteredData);
            } catch (\Exception $e) {
                if ($i === $attempts - 1) {
                    Log::error("Failed to index data to Meilisearch: {$e->getMessage()}");
                    return 0;
                }
                usleep($delay * 1000);
            }
        }
    }

    // Search data in Meilisearch
    public function search(string $indexName, string $query = '', array $options = []): array
    {
        $index = $this->client->index($indexName);
        $response = $index->search($query, $options)->getRaw();

        return $response;
    }

    // Clear all indexes
    public function clearAllIndexes(): void
    {
        $indexes = $this->client->getIndexes();

        if (is_array($indexes) || $indexes instanceof \Traversable) {
            foreach ($indexes as $index) {
                $this->client->index($index->uid)->delete();
            }
        } else {
            Log::info('No indexes found or an unexpected response format.');
            return;
        }

        Log::info('All indexes have been deleted successfully.');
    }

    // Delete a specific document from an index
    public function deleteData(string $indexName, string|int $documentId): void
    {
        $index = $this->client->index($indexName);
        $index->deleteDocument($documentId);

        Log::info("Document with ID {$documentId} has been deleted successfully.");
    }

    // Delete an entire index
    public function deleteIndex(string $indexName): void
    {
        $this->client->deleteIndex($indexName);

        Log::info("Index '{$indexName}' has been deleted successfully.");
    }

    public function updateData(
        string $indexName,
        string|int $documentId,
        array $updatedFields
    ): void {
        $index = $this->client->index($indexName);

        $existingDocument = $index->getDocument($documentId);

        if (!$existingDocument) {
            Log::warning("Document with ID {$documentId} not found in {$indexName}.");
            return;
        }

        $filteredData = app('utils')->filterNullValues($updatedFields);

        if (empty($filteredData)) {
            Log::info("No valid fields to update for document {$documentId}.");
            return;
        }

        $updatedDocument = array_merge($existingDocument, $filteredData);

        $index->addDocuments([$updatedDocument]);

        Log::info("Document with ID {$documentId} updated successfully.");
    }

    public function updateDataByField(
        string $indexName,
        string $field,
        string|int $value,
        array $updatedFields
    ): void {
        $index = $this->client->index($indexName);

        // Properly filter null values
        $filteredData = app('utils')->filterNullValues($updatedFields);

        if (empty($filteredData)) {
            Log::info("No valid fields to update for {$field}={$value} in {$indexName}.");
            return;
        }

        $results = $index->search('', [
            'filter' => ["{$field}={$value}"]
        ])->getHits();

        if (empty($results)) {
            Log::warning("No documents found with {$field}={$value} in {$indexName}.");
            return;
        }

        Log::info("Filtered Data: " . json_encode($filteredData));

        $updatedDocuments = [];

        foreach ($results as $document) {
            // Merge properly and preserve document structure
            $updatedDocuments[] = array_merge($document, $filteredData);
        }

        $index->addDocuments($updatedDocuments);

        Log::info("Documents with {$field}={$value} updated successfully.");
    }

}
