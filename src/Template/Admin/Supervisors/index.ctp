<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Rockprog Supervisor'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="rockprogSupervisors index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('mobile') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($rockprogSupervisors as $rockprogSupervisor): ?>
        <tr>
            <td><?= $this->Number->format($rockprogSupervisor->id) ?></td>
            <td><?= h($rockprogSupervisor->first_name) ?></td>
            <td><?= h($rockprogSupervisor->last_name) ?></td>
            <td><?= h($rockprogSupervisor->mobile) ?></td>
            <td><?= h($rockprogSupervisor->email) ?></td>
            <td><?= h($rockprogSupervisor->created) ?></td>
            <td><?= h($rockprogSupervisor->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $rockprogSupervisor->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rockprogSupervisor->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rockprogSupervisor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rockprogSupervisor->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
