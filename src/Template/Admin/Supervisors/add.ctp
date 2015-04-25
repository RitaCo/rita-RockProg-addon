<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Rockprog Supervisors'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="rockprogSupervisors form large-10 medium-9 columns">
    <?= $this->Form->create($rockprogSupervisor); ?>
    <fieldset>
        <legend><?= __('Add Rockprog Supervisor') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('bio');
            echo $this->Form->input('mobile');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
