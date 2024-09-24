<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LocalGovt Entity.
 */
class LocalGovt extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'state_id' => true,
        'senatorial_district_id' => true,
        'federal_constituency_id' => true,
        'state_constituency_id' => true,
        'local_govt' => true,
        'state' => true,
        'senatorial_district' => true,
        'federal_constituency' => true,
        'state_constituency' => true,
    ];
}
