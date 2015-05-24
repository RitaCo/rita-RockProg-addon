<?php
namespace RockProg\Model\Entity;

use Cake\ORM\Entity;

/**
 * RockprogProgram Entity.
 */
class Program extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'category_id' => true,
        'type_id' => true,
        'supervior_id' => true,
        'status' => true,
        'event' => true,
        'deadline' => true,
        'price' => true,
        'category' => true,
        'type' => true,
        'supervior' => true,
        'detail' => true
    ];
}
