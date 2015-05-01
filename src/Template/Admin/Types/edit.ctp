<?php
   $this->Rita->setPageCaption('برنامه‌ها')
   ->setPageCaption('نوع برنامه‌ها')
   ->setPageCaption('ویرایش نوع فعالیت')
   ->setPageNote('همینک می‌توانید مشخصات نع مورد نظر خود را اصلاح نمایید');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
      <?= $this->Form->create($type); ?>
		<div class="body-header padding-none">
			<div class="ui-toolbar">
				<div class="toolbar-band ">
					<a class="btn" href="<?= $this->Url->build(['action' => 'add'])?>">	
						<i class="  icon-createfolder"></i>
						<span>جدید</span>
					</a>
					
				</div>
			</div>
		</div>
		<div class="body-splitter"></div>
        
		<div class="body-container padding-none">
        <?php
            echo $this->Form->input('title',[ 'label' => 'عنوان']);
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

