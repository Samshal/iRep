<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Federal Constituencies'), ['controller' => 'FederalConstituencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Federal Constituency'), ['controller' => 'FederalConstituencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Local Govts'), ['controller' => 'LocalGovts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Local Govt'), ['controller' => 'LocalGovts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Senatorial Districts'), ['controller' => 'SenatorialDistricts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Senatorial District'), ['controller' => 'SenatorialDistricts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List State Constituencies'), ['controller' => 'StateConstituencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State Constituency'), ['controller' => 'StateConstituencies', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="states form large-10 medium-9 columns">
    <?= $this->Form->create($state) ?>
    <fieldset>
        <legend><?= __('Add State') ?></legend>
        <?php
            echo $this->Form->input('state');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
