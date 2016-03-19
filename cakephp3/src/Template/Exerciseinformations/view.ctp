<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Exerciseinformation'), ['action' => 'edit', $exerciseinformation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Exerciseinformation'), ['action' => 'delete', $exerciseinformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exerciseinformation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Exerciseinformations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exerciseinformation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exercises'), ['controller' => 'Exercises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exercise'), ['controller' => 'Exercises', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="exerciseinformations view large-9 medium-8 columns content">
    <h3><?= h($exerciseinformation->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($exerciseinformation->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Breakduration') ?></th>
            <td><?= h($exerciseinformation->breakduration) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($exerciseinformation->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Weight') ?></th>
            <td><?= $this->Number->format($exerciseinformation->weight) ?></td>
        </tr>
        <tr>
            <th><?= __('Repetition') ?></th>
            <td><?= $this->Number->format($exerciseinformation->repetition) ?></td>
        </tr>
        <tr>
            <th><?= __('SetAmount') ?></th>
            <td><?= $this->Number->format($exerciseinformation->setAmount) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Exercises') ?></h4>
        <?php if (!empty($exerciseinformation->exercises)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Maxweight') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($exerciseinformation->exercises as $exercises): ?>
            <tr>
                <td><?= h($exercises->id) ?></td>
                <td><?= h($exercises->title) ?></td>
                <td><?= h($exercises->maxweight) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Exercises', 'action' => 'view', $exercises->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Exercises', 'action' => 'edit', $exercises->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Exercises', 'action' => 'delete', $exercises->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exercises->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
