<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;

class Petition
{
    protected $postId;
    protected $targetSignatures;
    protected $targetRepresentativeIds;
    protected $signatures;
    protected $title;

    public function __construct($postId, $data)
    {
        $this->postId = $postId;
        foreach ($data as $key => $value) {
            switch ($key) {
                case 'target_signatures':
                    $this->targetSignatures = $value;
                    break;
                case 'target_representative_ids':
                    $this->targetRepresentativeIds = $value;
                    break;
                default:
                    if (property_exists($this, $key)) {
                        $this->$key = $value;
                    }
                    break;
            }
        }
    }

    public function insert($db)
    {
        $query = "
            INSERT INTO petitions
            (post_id, target_signatures, signatures)
            VALUES (?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([
            $this->postId,
            $this->targetSignatures,
            $this->signatures ?? 0,
        ]);

        $petitionId = $db->lastInsertId();

        foreach ($this->targetRepresentativeIds as $representativeId) {
            $query = "
                INSERT INTO petition_representatives
                (petition_id, representative_id)
                VALUES (?, ?)";
            $stmt = $db->prepare($query);
            $stmt->execute([$petitionId, $representativeId]);

            app('notification')->send(
                entityType: 'petition',
                entityId: $petitionId,
                accountId: $representativeId,
                titleTemplate: 'New petition for your constituency',
                bodyTemplate: 'A new petition has been created for your constituency'
            );
        }

        return $petitionId;
    }
}
