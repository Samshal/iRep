<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Local Govt'), ['action' => 'add']) ?></li>
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
<div class="localGovts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id_no') ?></th>
            <th><?= $this->Paginator->sort('state_id') ?></th>
            <th><?= $this->Paginator->sort('senatorial_district_id') ?></th>
            <th><?= $this->Paginator->sort('federal_constituency_id') ?></th>
            <th><?= $this->Paginator->sort('state_constituency_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($localGovts as $localGovt): ?>
        <tr>
            <td><?= $this->Number->format($localGovt->id_no) ?></td>
            <td>
                <?= $localGovt->has('state') ? $this->Html->link($localGovt->state->id_no, ['controller' => 'States', 'action' => 'view', $localGovt->state->id_no]) : '' ?>
            </td>
            <td>
                <?= $localGovt->has('senatorial_district') ? $this->Html->link($localGovt->senatorial_district->id_no, ['controller' => 'SenatorialDistricts', 'action' => 'view', $localGovt->senatorial_district->id_no]) : '' ?>
            </td>
            <td>
                <?= $localGovt->has('federal_constituency') ? $this->Html->link($localGovt->federal_constituency->id_no, ['controller' => 'FederalConstituencies', 'action' => 'view', $localGovt->federal_constituency->id_no]) : '' ?>
            </td>
            <td>
                <?= $localGovt->has('state_constituency') ? $this->Html->link($localGovt->state_constituency->id_no, ['controller' => 'StateConstituencies', 'action' => 'view', $localGovt->state_constituency->id_no]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $localGovt->id_no]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $localGovt->id_no]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $localGovt->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $localGovt->id_no)]) ?>
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
