<?php

$Cats= Cake\ORM\TableRegistry::get('Learning.Categories')->find('all')->all()->toArray(); 

?>
<div class="grid-columns " >
    <?php foreach($Cats as $cat): ?>   
   <div class="grid-cell">
        <div class="box-learning">
            <div class="caption"><?= $cat->title; ?></div>
            <div class="body">
                 <?= $this->element('Learning.slide-list',['links' => $cat]); ?>
            </div>
        </div>
   </div> 
   <?php endforeach; ?>
</div>