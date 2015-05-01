<?php
   $this->Rita->setPageCaption('برنامه‌ها')
   ->setPageCaption('کارگروه‌ها');
   $this->Rita->setPageNote('فهرست تمامی  کارگروه‌ها');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست کارگروه‌ها</div>
	</div>
	<div class="panel-body padding-none ">
		<div class="body-header padding-none">
			<div class="ui-toolbar">
				<div class="toolbar-band ">
                    <?= $this->Html->bottunIcon('کارگروه جدید', 'mdi-plus-circle',['action' => 'add'] ); ?>
					
				</div>
			</div>
		</div>
		
		<div class="body-container padding-none">

            <div class="ui-dataGrid">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th width="25px"><?= $this->Paginator->sort('id','#') ?></th>
            <th><?= $this->Paginator->sort('title','عنوان') ?></th>
            <th width="200px"><?= $this->Paginator->sort('slug','نامک') ?></th>
            <th width="100px"><?= $this->Paginator->sort('created','ثبت شده') ?></th>
            
            <th class="actions" style="width: 140px;"><?= __('عملیات') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($types as $learningCategory): ?>
        <tr>
            <td><?= $this->Number->format($learningCategory->id) ?></td>
            <td><?= h($learningCategory->title) ?></td>
            <td><?= h($learningCategory->slug) ?></td>

            <td><?= h($learningCategory->created) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('ویرایش'), ['action' => 'edit', $learningCategory->id],['class' => 'btn btn-green']) ?>
                <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $learningCategory->id], ['class' => 'btn btn-red', 'confirm' => __('آیااطمینان کامل دارید از حذف رکورد # {0}؟', $learningCategory->id)]) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    
</div>

	</div>

	</div>
</div>

