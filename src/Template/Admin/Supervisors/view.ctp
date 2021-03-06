<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rockprog Supervisor'), ['action' => 'edit', $rockprogSupervisor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rockprog Supervisor'), ['action' => 'delete', $rockprogSupervisor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rockprogSupervisor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rockprog Supervisors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rockprog Supervisor'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rockprogSupervisors view large-10 medium-9 columns">
    <h2><?= h($rockprogSupervisor->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($rockprogSupervisor->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($rockprogSupervisor->last_name) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($rockprogSupervisor->mobile) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($rockprogSupervisor->email) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($rockprogSupervisor->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($rockprogSupervisor->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($rockprogSupervisor->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Bio') ?></h6>
            <?= $this->Text->autoParagraph(h($rockprogSupervisor->bio)); ?>

        </div>
    </div>
</div>
