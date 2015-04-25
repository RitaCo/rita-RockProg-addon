<?php
namespace RockProg\Model\Entity;

use Cake\ORM\Entity;

/**
 * RockprogSupervisor Entity.
 */
class Supervisor extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'first_name' => true,
        'last_name' => true,
        'bio' => true,
        'mobile' => true,
        'email' => true,
    ];
}
