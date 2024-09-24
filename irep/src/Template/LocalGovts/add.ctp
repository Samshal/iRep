<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Local Govts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Senatorial Districts'), ['controller' => 'SenatorialDistricts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Senatorial District'), ['controller' => 'SenatorialDistricts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Federal Constituencies'), ['controller' => 'FederalConstituencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Federal Constituency'), ['controller' => 'FederalConstituencies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List State Constituencies'), ['controller' => 'StateConstituencies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State Constituency'), ['controller' => 'StateConstituencies', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="localGovts form large-10 medium-9 columns">
    <?= $this->Form->create($localGovt) ?>
    <fieldset>
        <legend><?= __('Add Local Govt') ?></legend>
        <?php
            echo $this->Form->input('state_id', ['options' => $states]);
            echo $this->Form->input('senatorial_district_id', ['options' => $senatorialDistricts, 'empty' => true]);
            echo $this->Form->input('federal_constituency_id', ['options' => $federalConstituencies, 'empty' => true]);
            echo $this->Form->input('state_constituency_id', ['options' => $stateConstituencies, 'empty' => true]);
            echo $this->Form->input('local_govt');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
