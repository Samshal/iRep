<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Local Govt'), ['action' => 'edit', $localGovt->id_no]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Local Govt'), ['action' => 'delete', $localGovt->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $localGovt->id_no)]) ?> </li>
        <li><?= $this->Html->link(__('List Local Govts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Local Govt'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Senatorial Districts'), ['controller' => 'SenatorialDistricts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Senatorial District'), ['controller' => 'SenatorialDistricts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Federal Constituencies'), ['controller' => 'FederalConstituencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Federal Constituency'), ['controller' => 'FederalConstituencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List State Constituencies'), ['controller' => 'StateConstituencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State Constituency'), ['controller' => 'StateConstituencies', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="localGovts view large-10 medium-9 columns">
    <h2><?= h($localGovt->id_no) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= $localGovt->has('state') ? $this->Html->link($localGovt->state->id_no, ['controller' => 'States', 'action' => 'view', $localGovt->state->id_no]) : '' ?></p>
            <h6 class="subheader"><?= __('Senatorial District') ?></h6>
            <p><?= $localGovt->has('senatorial_district') ? $this->Html->link($localGovt->senatorial_district->id_no, ['controller' => 'SenatorialDistricts', 'action' => 'view', $localGovt->senatorial_district->id_no]) : '' ?></p>
            <h6 class="subheader"><?= __('Federal Constituency') ?></h6>
            <p><?= $localGovt->has('federal_constituency') ? $this->Html->link($localGovt->federal_constituency->id_no, ['controller' => 'FederalConstituencies', 'action' => 'view', $localGovt->federal_constituency->id_no]) : '' ?></p>
            <h6 class="subheader"><?= __('State Constituency') ?></h6>
            <p><?= $localGovt->has('state_constituency') ? $this->Html->link($localGovt->state_constituency->id_no, ['controller' => 'StateConstituencies', 'action' => 'view', $localGovt->state_constituency->id_no]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id No') ?></h6>
            <p><?= $this->Number->format($localGovt->id_no) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Local Govt') ?></h6>
            <?= $this->Text->autoParagraph(h($localGovt->local_govt)) ?>
        </div>
    </div>
</div>
