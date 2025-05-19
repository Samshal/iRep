<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;

class ConstituencyImport implements ToCollection
{
    protected $states;

    public function __construct()
    {
        // Map of lowercase state names to their IDs
        $this->states = DB::table('states')->pluck('id', 'name')->mapWithKeys(function ($id, $name) {
            return [strtolower(trim($name)) => $id];
        });
    }

    public function collection(Collection $rows)
    {
        $currentStateId = null;

        foreach ($rows as $row) {
            if ($row->filter()->isEmpty()) {
                continue;
            }

            $firstCell = trim((string) ($row[0] ?? ''));
            $normalized = strtolower($firstCell);

            // If row matches a state name
            if (isset($this->states[$normalized])) {
                $currentStateId = $this->states[$normalized];
                echo "Switched to state: $firstCell\n";
                continue;
            }

            // Skip if we haven't detected the current state
            if (!$currentStateId) {
                echo "Skipping row (no state context): " . $row->implode(' | ') . "\n";
                continue;
            }

            // Skip header rows like 'S/No' or 'Name'
            if (in_array($normalized, ['s/no', 'sno', 'no', 'serial', 'name'])) {
                continue;
            }

            // Skip rows that don't have expected columns
            if (!isset($row[1]) || trim($row[1]) === '') {
                echo "Skipping invalid data row: " . $row->implode(' | ') . "\n";
                continue;
            }

            // Insert into the database
            DB::table('constituencies')->insert([
                'name' => trim((string) $row[1]),
                'code' => isset($row[2]) ? trim((string) $row[2]) : null,
                'type' => 'state',
                'state_id' => $currentStateId,
            ]);
        }
    }
}
