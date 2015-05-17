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
            <th width="35px"><?= $this->Paginator->sort('id', '#') ?></th>
            <th width="250px"><?= $this->Paginator->sort('title', 'عنوان') ?></th>
            <th width="60px"><?= $this->Paginator->sort('status', 'وضعیت') ?></th>
            <th width="100px"><?= $this->Paginator->sort('category_id', 'گروه') ?></th>
            <th width="100px"><?= $this->Paginator->sort('type_id', 'فعالیت') ?></th>
            <th width="80px"><?= $this->Paginator->sort('supervior_id', 'سرپرست') ?></th>
            <th width="80px"><?= $this->Paginator->sort('event', 'رویداد') ?></th>
            <th width="100px"><?= $this->Paginator->sort('deadline', 'مهلت ثبت‌ نام') ?></th>
            <th width="200px" class="actions"><?= __('عملیات') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($Programs as $Program): ?>
        <tr>
            <td><?= $this->Number->format($Program->id) ?></td>
            <td><?= p($Program->title) ?></td>
            <td><?= p($status[$Program->status]) ?></td>
            <td><?= p($Program->category->title) ?></td>
            <td><?= p($Program->type->title) ?></td>
            <td><?= $this->Html->image($Program->supervisor->avator) ?></td>

            <td><?= $Program->event->i18nFormat("yyyy/MM/dd")  ?></td>
            <td><?= h($Program->deadline->i18nFormat("yyyy/MM/dd")) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('مشاهده'), ['prefix' => 'front', 'action' => 'view', $Program->id], ['class' => 'btn btn-action']) ?>
                <?= $this->Html->link(__('ویرایش'), [ 'action' => 'edit', $Program->id],['class' => 'btn btn-green']) ?>
                <?= $this->Form->postLink(__('حذف'), ['action' => 'delete', $Program->id], ['class' => 'btn btn-red', 'confirm' => __('آیااطمینان کامل دارید از حذف رکورد # {0}؟', $Program->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
        </tbody>
                </table>
    
            </div>

	   </div>

	</div>
</div>

