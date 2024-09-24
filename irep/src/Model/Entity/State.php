<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * State Entity.
 */
class State extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'state' => true,
        'latitude' => true,
        'longitude' => true,
        'federal_constituencies' => true,
        'local_govts' => true,
        'senatorial_districts' => true,
        'state_constituencies' => true,
    ];
}
