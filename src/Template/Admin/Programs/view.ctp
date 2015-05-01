<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Rockprog Program'), ['action' => 'edit', $rockprogProgram->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rockprog Program'), ['action' => 'delete', $rockprogProgram->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rockprogProgram->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rockprog Programs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rockprog Program'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rockprog Categories'), ['controller' => 'RockprogCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rockprog Category'), ['controller' => 'RockprogCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rockprog Types'), ['controller' => 'RockprogTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rockprog Type'), ['controller' => 'RockprogTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="rockprogPrograms view large-10 medium-9 columns">
    <h2><?= h($rockprogProgram->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Rockprog Category') ?></h6>
            <p><?= $rockprogProgram->has('rockprog_category') ? $this->Html->link($rockprogProgram->rockprog_category->title, ['controller' => 'RockprogCategories', 'action' => 'view', $rockprogProgram->rockprog_category->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Rockprog Type') ?></h6>
            <p><?= $rockprogProgram->has('rockprog_type') ? $this->Html->link($rockprogProgram->rockprog_type->title, ['controller' => 'RockprogTypes', 'action' => 'view', $rockprogProgram->rockprog_type->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($rockprogProgram->id) ?></p>
            <h6 class="subheader"><?= __('Rockprog Supervior Id') ?></h6>
            <p><?= $this->Number->format($rockprogProgram->rockprog_supervior_id) ?></p>
            <h6 class="subheader"><?= __('Status') ?></h6>
            <p><?= $this->Number->format($rockprogProgram->status) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Event') ?></h6>
            <p><?= h($rockprogProgram->event) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= var_export($rockprogProgram->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= var_export($rockprogProgram->modified) ?></p>
        </div>
    </div>
</div>
