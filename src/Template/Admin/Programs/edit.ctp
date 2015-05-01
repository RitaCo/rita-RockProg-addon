<?php
   $this->Rita->setPageCaption('مدیریت برنامه‌ها')
   ->setPageCaption('برنامه')
   ->setPageCaption('ویرایش');
   $this->Rita->setPageNote('شما همکنون می‌توانید سایر فیلد‌های مورد نیاز را تکمیل نمایید.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($Program); ?>
       
		<div class="body-container ">
            <div class="group-inputs">   
            <?=  $this->Form->input('title',['label' => 'عوان برنامه']); ?>
                <div class="form-col">
                    <?= $this->Form->input('category_id', ['options' => $Categories, 'label' => 'گروه', 'empty' => '[انتخاب کنید]']); ?>            
                    <?= $this->Form->input('type_id', ['options' => $Types, 'label' => 'فعالیت', 'empty' => '[انتخاب کنید]']); ?>
                </div>
            </div>
            <div class="group-inputs">                            
                <div class="form-col">
                    <?=  $this->Form->input('supervior_id',['options' => $Superviors, 'label' => 'سرپرست', 'empty' => '[انتخاب کنید]']);; ?>
                    <?=  $this->Form->input('status', ['options' => $status]); ?>
                </div>
                <div class="form-col">
                    <?=  $this->Form->input('supervior_id',['options' => $Superviors, 'label' => 'سرپرست', 'empty' => '[انتخاب کنید]']);; ?>
                    <?=  $this->Form->input('status', ['options' => $status]); ?>
                </div>
                <div class="form-col">
                    <?=  $this->Form->input('created'); ?>
                    <?=  $this->Form->input('deadline'); ?>
                </div>              
     
            </div>
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>
