<?php
   $this->Rita->setPageCaption('برنامه‌ها')
   ->setPageCaption('‌سرپرست‌ها')
   ->setPageCaption('سرپرست جدید');
   $this->Rita->setPageNote('شما همکنون می‌توانید یک پروفایل برای سرپرست جدید تعریف نمایید.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($Program); ?>
       
		<div class="body-container padding-none">
            <?= $this->Form->input('title',['label' => 'عوان برنامه']); ?>
        <div class="form-col">
            <?= $this->Form->input('category_id', ['options' => $Categories, 'label' => 'گروه', 'empty' => '[انتخاب کنید]']); ?>            
            <?= $this->Form->input('type_id', ['options' => $Types, 'label' => 'فعالیت', 'empty' => '[انتخاب کنید]']); ?>
        </div>            
	</div>
    <div class="body-footer ">
           		<?= $this->Html->bottunIcon('بازگشت','mdi-forward',['action' => 'index']); ?>
                <?= $this->Form->submit(__('ذخیره')) ?>	
    </div>
          
    <?= $this->Form->end() ?>
	</div>
</div>
