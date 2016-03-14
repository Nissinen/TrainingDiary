<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Henkilo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="henkilo index large-9 medium-8 columns content">
    <h3><?= __('Henkilo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Avain') ?></th>
                <th><?= $this->Paginator->sort('Tunniste') ?></th>
                <th><?= $this->Paginator->sort('Etunimet') ?></th>
                <th><?= $this->Paginator->sort('Sukunimi') ?></th>
                <th><?= $this->Paginator->sort('Sahkoposti') ?></th>
                <th><?= $this->Paginator->sort('Ika') ?></th>
                <th><?= $this->Paginator->sort('Puhelinnumero') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($henkilo as $henkilo): ?>
            <tr>
                <td><?= $this->Number->format($henkilo->Avain) ?></td>
                <td><?= h($henkilo->Tunniste) ?></td>
                <td><?= h($henkilo->Etunimet) ?></td>
                <td><?= h($henkilo->Sukunimi) ?></td>
                <td><?= h($henkilo->Sahkoposti) ?></td>
                <td><?= $this->Number->format($henkilo->Ika) ?></td>
                <td><?= h($henkilo->Puhelinnumero) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $henkilo->Avain]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $henkilo->Avain]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $henkilo->Avain], ['confirm' => __('Are you sure you want to delete # {0}?', $henkilo->Avain)]) ?>
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
