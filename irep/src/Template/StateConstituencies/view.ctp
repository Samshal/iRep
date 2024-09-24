<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit State Constituency'), ['action' => 'edit', $stateConstituency->id_no]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State Constituency'), ['action' => 'delete', $stateConstituency->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $stateConstituency->id_no)]) ?> </li>
        <li><?= $this->Html->link(__('List State Constituencies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State Constituency'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Local Govts'), ['controller' => 'LocalGovts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Local Govt'), ['controller' => 'LocalGovts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="stateConstituencies view large-10 medium-9 columns">
    <h2><?= h($stateConstituency->id_no) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= $stateConstituency->has('state') ? $this->Html->link($stateConstituency->state->id_no, ['controller' => 'States', 'action' => 'view', $stateConstituency->state->id_no]) : '' ?></p>
            <h6 class="subheader"><?= __('State Constituency') ?></h6>
            <p><?= h($stateConstituency->state_constituency) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id No') ?></h6>
            <p><?= $this->Number->format($stateConstituency->id_no) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related LocalGovts') ?></h4>
    <?php if (!empty($stateConstituency->local_govts)): ?>
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
        <?php foreach ($stateConstituency->local_govts as $localGovts): ?>
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
