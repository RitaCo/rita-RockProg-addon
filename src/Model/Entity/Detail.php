<?php
namespace RockProg\Model\Entity;

use Cake\ORM\Entity;

/**
 * RockprogDetail Entity.
 */
class Detail extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'program_id' => true,
        'location' => true,
        'accessories' => true,
        'note' => true,
        'about' => true,
        'condition' => true,
        'program' => true,
    ];
}
