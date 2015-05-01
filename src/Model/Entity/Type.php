<?php
namespace RockProg\Model\Entity;

use Rita\Core\ORM\Entity;

/**
 * Type Entity.
 */
class Type extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'slug' => true,
    ];
}
