 <?php
 
   $progs = Cake\ORM\TableRegistry::get('RockProg.Programs')
   ->find('all')
   ->contain(['Types', 'Supervisors'])
   ->where(['Programs.category_id' => $cat])
   ->limit(10)->order(['Programs.modified'])->all()->toArray();
   
   
 ?>
 <div class="prog-list-container">
    <?php foreach($progs as $prog): ?>
        <div class="list-block">
            <div class="header">
            s
            </div>
            <div class="body">
                <?= pr($prog->title); ?>
            </div>
            
        </div>
    <?php endforeach; ?>
 </div>
 
 