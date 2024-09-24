<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Senatorial District'), ['action' => 'edit', $senatorialDistrict->id_no]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Senatorial District'), ['action' => 'delete', $senatorialDistrict->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $senatorialDistrict->id_no)]) ?> </li>
        <li><?= $this->Html->link(__('List Senatorial Districts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Senatorial District'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Local Govts'), ['controller' => 'LocalGovts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Local Govt'), ['controller' => 'LocalGovts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="senatorialDistricts view large-10 medium-9 columns">
    <h2><?= h($senatorialDistrict->id_no) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= $senatorialDistrict->has('state') ? $this->Html->link($senatorialDistrict->state->id_no, ['controller' => 'States', 'action' => 'view', $senatorialDistrict->state->id_no]) : '' ?></p>
            <h6 class="subheader"><?= __('Senatorial District') ?></h6>
            <p><?= h($senatorialDistrict->senatorial_district) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id No') ?></h6>
            <p><?= $this->Number->format($senatorialDistrict->id_no) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related LocalGovts') ?></h4>
    <?php if (!empty($senatorialDistrict->local_govts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id No') ?></th>
            <th><?= __('State Id') ?></th>
            <th><?= __('Senatorial District Id') ?></th>
            <th><?= __('Federal Constituency Id') ?></th>
            <th><?= __('State Constituency Id') ?></th>
            <th><?= __('Local Govt') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($senatorialDistrict->local_govts as $localGovts): ?>
        <tr>
            <td><?= h($localGovts->id_no) ?></td>
            <td><?= h($localGovts->state_id) ?></td>
            <td><?= h($localGovts->senatorial_district_id) ?></td>
            <td><?= h($localGovts->federal_constituency_id) ?></td>
            <td><?= h($localGovts->state_constituency_id) ?></td>
            <td><?= h($localGovts->local_govt) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'LocalGovts', 'action' => 'view', $localGovts->id_no]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'LocalGovts', 'action' => 'edit', $localGovts->id_no]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'LocalGovts', 'action' => 'delete', $localGovts->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $localGovts->id_no)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
