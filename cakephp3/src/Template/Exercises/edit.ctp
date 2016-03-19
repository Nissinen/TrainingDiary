<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $exercise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $exercise->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Exercises'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Exerciseinformations'), ['controller' => 'Exerciseinformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exerciseinformation'), ['controller' => 'Exerciseinformations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Trainings'), ['controller' => 'Trainings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Trainings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="exercises form large-9 medium-8 columns content">
    <?= $this->Form->create($exercise) ?>
    <fieldset>
        <legend><?= __('Edit Exercise') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('maxweight');
            echo $this->Form->input('exerciseinformations._ids', ['options' => $exerciseinformations]);
            echo $this->Form->input('trainings._ids', ['options' => $trainings]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
