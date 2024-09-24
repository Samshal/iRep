<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SenatorialDistrict Entity.
 */
class SenatorialDistrict extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'state_id' => true,
        'senatorial_district' => true,
        'state' => true,
        'local_govts' => true,
    ];
}
