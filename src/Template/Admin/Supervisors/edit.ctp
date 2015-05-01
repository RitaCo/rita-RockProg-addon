<?php
   $this->Rita->setPageCaption('برنامه‌ها')
   ->setPageCaption('‌سرپرست‌ها')
   ->setPageCaption('ویرایش');
   $this->Rita->setPageNote('شما می توانید مشخصات سرپرست را ویرایش نمایید.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($Supervisor); ?>
       
		<div class="body-container padding-none">
        <?php  
            echo $this->Form->input('first_name', ['label' => 'نام']);
            echo $this->Form->input('last_name', ['label' => 'نام خانوادگی']);
            echo $this->Form->input('bio', ['label' => 'بیوگرافی']);
            echo $this->Form->input('mobile',['label' => 'همراه' , 'dir' => 'ltr']);
            echo $this->Form->input('email', ['label' => 'ایمیل', 'dir' => 'ltr']);
       ?>
 
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>

