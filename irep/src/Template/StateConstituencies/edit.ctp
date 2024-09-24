<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $stateConstituency->id_no],
                ['confirm' => __('Are you sure you want to delete # {0}?', $stateConstituency->id_no)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List State Constituencies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Local Govts'), ['controller' => 'LocalGovts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Local Govt'), ['controller' => 'LocalGovts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="stateConstituencies form large-10 medium-9 columns">
    <?= $this->Form->create($stateConstituency) ?>
    <fieldset>
        <legend><?= __('Edit State Constituency') ?></legend>
        <?php
            echo $this->Form->input('state_id', ['options' => $states]);
            echo $this->Form->input('state_constituency');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
