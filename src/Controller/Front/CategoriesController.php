<?php
namespace RockProg\Controller\Front;

use RockProg\Controller\AppController;

class CategoriesController extends AppController
{
    

    

    
    public function view( $id = null )
    {
        $q = $this->Categories->Posts->find('all')
            ->where(['Posts.category_id' => $id])
            ->contain('Categories')
            ->order(['Posts.created' => 'DESC']);
        
        $this->set('Posts', $this->paginate($q));
        $this->set('_serialize', ['Posts']);        
        
    }

}
