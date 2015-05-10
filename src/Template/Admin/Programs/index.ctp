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
            <th><?= $this->Paginator->sort('id', '#') ?></th>
            <th><?= $this->Paginator->sort('rockprog_category_id', 'گروه') ?></th>
            <th><?= $this->Paginator->sort('rockprog_type_id', 'فعالیت') ?></th>
            <th><?= $this->Paginator->sort('rockprog_supervior_id', 'سرپرست') ?></th>
            <th><?= $this->Paginator->sort('status', 'وضعیت') ?></th>
            <th><?= $this->Paginator->sort('event', '') ?></th>
            <th><?= $this->Paginator->sort('deadline', '') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($Programs as $Program): ?>
        <tr>
            <td><?= $this->Number->format($Program->id) ?></td>
            <td>
                <?= $Program->has('rockprog_category') ? $this->Html->link($Program->rockprog_category->title, ['controller' => 'RockprogCategories', 'action' => 'view', $Program->rockprog_category->id]) : '' ?>
            </td>
            <td>
                <?= $Program->has('rockprog_type') ? $this->Html->link($Program->rockprog_type->title, ['controller' => 'RockprogTypes', 'action' => 'view', $Program->rockprog_type->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($Program->rockprog_supervior_id) ?></td>
            <td><?= $this->Number->format($Program->status) ?></td>
            <td><?php //$Program->event->i18nFormat("yy/MM/dd")  ?></td>
            <td><?= h($Program->deadline->i18nFormat("yyyy/MM/dd")) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $Program->id]) ?>
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

