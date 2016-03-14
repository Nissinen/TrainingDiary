<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $henkilo->Avain],
                ['confirm' => __('Are you sure you want to delete # {0}?', $henkilo->Avain)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Henkilo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="henkilo form large-9 medium-8 columns content">
    <?= $this->Form->create($henkilo) ?>
    <fieldset>
        <legend><?= __('Edit Henkilo') ?></legend>
        <?php
            echo $this->Form->input('Tunniste');
            echo $this->Form->input('Etunimet');
            echo $this->Form->input('Sukunimi');
            echo $this->Form->input('Sahkoposti');
            echo $this->Form->input('Ika');
            echo $this->Form->input('Puhelinnumero');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
