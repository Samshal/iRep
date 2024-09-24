<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StateConstituency Entity.
 */
class StateConstituency extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'state_id' => true,
        'state_constituency' => true,
        'state' => true,
        'local_govts' => true,
    ];
}
