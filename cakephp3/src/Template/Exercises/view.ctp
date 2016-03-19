<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Exercise'), ['action' => 'edit', $exercise->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Exercise'), ['action' => 'delete', $exercise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exercise->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Exercises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exercise'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exerciseinformations'), ['controller' => 'Exerciseinformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exerciseinformation'), ['controller' => 'Exerciseinformations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trainings'), ['controller' => 'Trainings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Trainings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="exercises view large-9 medium-8 columns content">
    <h3><?= h($exercise->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($exercise->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($exercise->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Maxweight') ?></th>
            <td><?= $this->Number->format($exercise->maxweight) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Exerciseinformations') ?></h4>
        <?php if (!empty($exercise->exerciseinformations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Weight') ?></th>
                <th><?= __('Breakduration') ?></th>
                <th><?= __('Repetition') ?></th>
                <th><?= __('SetAmount') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($exercise->exerciseinformations as $exerciseinformations): ?>
            <tr>
                <td><?= h($exerciseinformations->id) ?></td>
                <td><?= h($exerciseinformations->title) ?></td>
                <td><?= h($exerciseinformations->weight) ?></td>
                <td><?= h($exerciseinformations->breakduration) ?></td>
                <td><?= h($exerciseinformations->repetition) ?></td>
                <td><?= h($exerciseinformations->setAmount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Exerciseinformations', 'action' => 'view', $exerciseinformations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Exerciseinformations', 'action' => 'edit', $exerciseinformations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Exerciseinformations', 'action' => 'delete', $exerciseinformations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exerciseinformations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Trainings') ?></h4>
        <?php if (!empty($exercise->trainings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Duration') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($exercise->trainings as $trainings): ?>
            <tr>
                <td><?= h($trainings->id) ?></td>
                <td><?= h($trainings->user_id) ?></td>
                <td><?= h($trainings->title) ?></td>
                <td><?= h($trainings->duration) ?></td>
                <td><?= h($trainings->created) ?></td>
                <td><?= h($trainings->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Trainings', 'action' => 'view', $trainings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Trainings', 'action' => 'edit', $trainings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trainings', 'action' => 'delete', $trainings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trainings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
