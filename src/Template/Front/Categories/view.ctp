<?php

$this->extend('/Common/Section');


?>
<div id="content-col" class="com-grid-flex">
    <div class="right-side">
         <?= $this->cell('Learning.Front::category',['type' => 'list']); ?>
    </div>
    <div class="content-side">
           <?php foreach($Posts as $key => $rec):?>
        <div class="learning-post-box">
            <div class="caption">
                
                <h3><?= $this->Html->link($rec->title,['_name' => 'Learning.post', 'id' => $rec->id,'slug'=>$rec->slug]); ?></h3>    
                <h5><?= $rec->created->i18nFormat("YYYY MMMM DD"); ?></h5>                
                </div>
            <div class="body">
                <?= $this->Text->autoParagraph($rec->excerpt) ?>
                
                <?= $this->Html->link('ادامه مطلب',['_name' => 'Learning.post', 'id' => $rec->id,'slug'=>$rec->slug],['class' => 'btn']); ?>    
            </div>
        </div>    
        
        
    <?php endforeach; ?> 
    </div>
    
</div>