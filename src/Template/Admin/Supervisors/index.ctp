<?php
   $this->Rita->setPageCaption('برنامه‌ها')->setPageCaption ('فعالیت‌ها');
   $this->Rita->setPageNote('تمامی فعالیت‌های تعریف شده به شرح ذیل می باشد.');
?>
<div class="ui-panel-framed ">
	<div class="panel-header bg-flat">
		<div class="header-caption">فهرست</div>
	</div>
	<div class="panel-body padding-none ">
		<div class="body-header padding-none">
			<div class="ui-toolbar">
				<div class="toolbar-band ">
					<?= $this->Html->bottunIcon('سرپرست جدید', 'mdi-plus-circle',['action' => 'add'] ); ?>
					
				</div>
			</div>
		</div>
		<div class="body-splitter"></div>
		<div class="body-container padding-none">

            <div class="ui-dataGrid">
                <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th width="25px"><?= $this->Paginator->sort('id', '#') ?></th>
                        <th width="76px">تصویر</th>
                        <th><?= $this->Paginator->sort('full_name', 'نام خوانوادگی') ?></th>
                        <th width="115px"><?= $this->Paginator->sort('mobile', 'همراه') ?></th>
                        <th><?= $this->Paginator->sort('email', 'ایمیل') ?></th>
                        <th width="90px"><?= $this->Paginator->sort('created', 'ایجاد') ?></th>
                        <th width="90px"><?= $this->Paginator->sort('modified', 'ویرایش') ?></th>
                        <th width="140px" class="actions"><?= __('عملیات') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($Supervisors as $Supervisor): ?>
                    <tr>
                        <td><?= $this->Number->format($Supervisor->id) ?></td>
                        <td><?= $this->Html->image($Supervisor->avator) ?></td>
                        <td><?= h($Supervisor->full_name) ?></td>
                        <td><?= p($Supervisor->mobile) ?></td>
                        <td><?= h($Supervisor->email) ?></td>
                        <td><?= h($Supervisor->created) ?></td>
                        <td><?= h($Supervisor->modified) ?></td>
                        <td class="actions">
            
                            <?= $this->Html->link(__('ویرایش'), ['action' => 'edit', $Supervisor->id],['class' => 'btn btn-green']) ?>
                            <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $Supervisor->id], ['class' => 'btn btn-red', 'confirm' => __('آیااطمینان کامل دارید از حذف رکورد # {0}؟', $Supervisor->id)]) ?>
                        </td>
                    </tr>
            
                <?php endforeach; ?>
                </tbody>
                </table>
    
            </div>

	   </div>

	</div>
</div>

