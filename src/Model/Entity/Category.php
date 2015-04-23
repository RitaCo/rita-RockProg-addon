<?php
namespace Learning\Model\Entity;

use Rita\Core\ORM\Entity;
use Cake\ORM\TableRegistry;

/**
 * LearningCategory Entity.
 */
class Category extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'note' => true,
        'slug' => true,
        'posts' => true,
    ];
    
    
    
    protected function _getLastPosts(){
        $comments = TableRegistry::get('Learning.Posts');
        return $comments->find('all')
            ->where(['category_id' => $this->id])
            //->limit(10)
            ->all();
    }
    
    
}
