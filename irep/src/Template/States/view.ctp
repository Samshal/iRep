<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id_no]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id_no)]) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Federal Constituencies'), ['controller' => 'FederalConstituencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Federal Constituency'), ['controller' => 'FederalConstituencies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Local Govts'), ['controller' => 'LocalGovts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Local Govt'), ['controller' => 'LocalGovts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Senatorial Districts'), ['controller' => 'SenatorialDistricts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Senatorial District'), ['controller' => 'SenatorialDistricts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List State Constituencies'), ['controller' => 'StateConstituencies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State Constituency'), ['controller' => 'StateConstituencies', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="states view large-10 medium-9 columns">
    <h2><?= h($state->id_no) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id No') ?></h6>
            <p><?= $this->Number->format($state->id_no) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('State') ?></h6>
            <?= $this->Text->autoParagraph(h($state->state)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related FederalConstituencies') ?></h4>
    <?php if (!empty($state->federal_constituencies)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id No') ?></th>
            <th><?= __('State Id') ?></th>
            <th><?= __('Federal Constituency') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($state->federal_constituencies as $federalConstituencies): ?>
        <tr>
            <td><?= h($federalConstituencies->id_no) ?></td>
            <td><?= h($federalConstituencies->state_id) ?></td>
            <td><?= h($federalConstituencies->federal_constituency) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'FederalConstituencies', 'action' => 'view', $federalConstituencies->id_no]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'FederalConstituencies', 'action' => 'edit', $federalConstituencies->id_no]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FederalConstituencies', 'action' => 'delete', $federalConstituencies->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $federalConstituencies->id_no)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related LocalGovts') ?></h4>
    <?php if (!empty($state->local_govts)): ?>
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
        <?php foreach ($state->local_govts as $localGovts): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related SenatorialDistricts') ?></h4>
    <?php if (!empty($state->senatorial_districts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id No') ?></th>
            <th><?= __('State Id') ?></th>
            <th><?= __('Senatorial District') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($state->senatorial_districts as $senatorialDistricts): ?>
        <tr>
            <td><?= h($senatorialDistricts->id_no) ?></td>
            <td><?= h($senatorialDistricts->state_id) ?></td>
            <td><?= h($senatorialDistricts->senatorial_district) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'SenatorialDistricts', 'action' => 'view', $senatorialDistricts->id_no]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'SenatorialDistricts', 'action' => 'edit', $senatorialDistricts->id_no]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'SenatorialDistricts', 'action' => 'delete', $senatorialDistricts->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $senatorialDistricts->id_no)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related StateConstituencies') ?></h4>
    <?php if (!empty($state->state_constituencies)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id No') ?></th>
            <th><?= __('State Id') ?></th>
            <th><?= __('State Constituency') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($state->state_constituencies as $stateConstituencies): ?>
        <tr>
            <td><?= h($stateConstituencies->id_no) ?></td>
            <td><?= h($stateConstituencies->state_id) ?></td>
            <td><?= h($stateConstituencies->state_constituency) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'StateConstituencies', 'action' => 'view', $stateConstituencies->id_no]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'StateConstituencies', 'action' => 'edit', $stateConstituencies->id_no]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'StateConstituencies', 'action' => 'delete', $stateConstituencies->id_no], ['confirm' => __('Are you sure you want to delete # {0}?', $stateConstituencies->id_no)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
