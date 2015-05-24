<?php

$Cats= Cake\ORM\TableRegistry::get('RockProg.Categories')->find('all')->all()->toArray(); 

?>
<div id="Front-grid">
       
   
   <div class="prog-block">
            <div class="ui-tab tab__pos-top border-none">
                <ul class="tab--nav ">
                    <?php foreach($Cats as $cat): ?>
                        <li class="nav--item" data-tab="tab<?= $cat->id?>"><a><?= $cat->title; ?></a></li>
                    <?php endforeach; ?>                 
                </ul>
                <div class="tab--container">
                    <?php foreach($Cats as $cat): ?>
                    <div id="tab<?=$cat->id?>" class="tab--body">
                    
                        <?= $cat->title; ?>
                    
                    </div>
                    <?php endforeach; ?>
                </div>            
            </div>
            
            
   </div>
    
   
</div>