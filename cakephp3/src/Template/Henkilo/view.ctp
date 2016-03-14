<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Henkilo'), ['action' => 'edit', $henkilo->Avain]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Henkilo'), ['action' => 'delete', $henkilo->Avain], ['confirm' => __('Are you sure you want to delete # {0}?', $henkilo->Avain)]) ?> </li>
        <li><?= $this->Html->link(__('List Henkilo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Henkilo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="henkilo view large-9 medium-8 columns content">
    <h3><?= h($henkilo->Avain) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tunniste') ?></th>
            <td><?= h($henkilo->Tunniste) ?></td>
        </tr>
        <tr>
            <th><?= __('Etunimet') ?></th>
            <td><?= h($henkilo->Etunimet) ?></td>
        </tr>
        <tr>
            <th><?= __('Sukunimi') ?></th>
            <td><?= h($henkilo->Sukunimi) ?></td>
        </tr>
        <tr>
            <th><?= __('Sahkoposti') ?></th>
            <td><?= h($henkilo->Sahkoposti) ?></td>
        </tr>
        <tr>
            <th><?= __('Puhelinnumero') ?></th>
            <td><?= h($henkilo->Puhelinnumero) ?></td>
        </tr>
        <tr>
            <th><?= __('Avain') ?></th>
            <td><?= $this->Number->format($henkilo->Avain) ?></td>
        </tr>
        <tr>
            <th><?= __('Ika') ?></th>
            <td><?= $this->Number->format($henkilo->Ika) ?></td>
        </tr>
    </table>
</div>
