<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $exerciseinformation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $exerciseinformation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Exerciseinformations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Exercises'), ['controller' => 'Exercises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exercise'), ['controller' => 'Exercises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="exerciseinformations form large-9 medium-8 columns content">
    <?= $this->Form->create($exerciseinformation) ?>
    <fieldset>
        <legend><?= __('Edit Exerciseinformation') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('weight');
            echo $this->Form->input('breakduration');
            echo $this->Form->input('repetition');
            echo $this->Form->input('setAmount');
            echo $this->Form->input('exercises._ids', ['options' => $exercises]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
