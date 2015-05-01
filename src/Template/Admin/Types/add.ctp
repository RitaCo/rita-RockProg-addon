<?php
   $this->Rita->setPageCaption('برنامه‌ها')
   ->setPageCaption('نوع برنامه‌ها')
   ->setPageCaption('تعریف برنامه')
   ->setPageNote('شما می‌توانید نوع جدیدی از برنامه‌ها رو ثبت نمایید.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($type); ?>

        
		<div class="body-container padding-none">
          
  


        <?php
            echo $this->Form->input('title',[ 'label' => 'موضوع']);
            echo $this->Form->input('slug',[ 'label' => 'نامک']);
        ?>
 
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>

