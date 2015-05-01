<?php
   $this->Rita->setPageCaption('برنامه‌ها')->setPageCaption ('فعالیت‌ها');
   $this->Rita->setPageNote('تمامی فعالیت‌های تعریف شده به شرح ذیل می باشد.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($Categories); ?>
       
		<div class="body-container padding-none">
          
  


        <?php
            echo $this->Form->input('title',[ 'label' => 'عنوان موضوع']);
            echo $this->Form->input('about',[ 'label' => 'درباره موضوع']);
            echo $this->Form->input('report',[ 'label' => 'گزارش دارد؟']);
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

