<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Exerciseinformation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Exercises'), ['controller' => 'Exercises', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Exercise'), ['controller' => 'Exercises', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="exerciseinformations index large-9 medium-8 columns content">
    <h3><?= __('Exerciseinformations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <!-- <th><?= $this->Paginator->sort('id') ?></th> -->
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('weight') ?></th>
                <th><?= $this->Paginator->sort('breakduration') ?></th>
                <th><?= $this->Paginator->sort('repetition') ?></th>
                <th><?= $this->Paginator->sort('setAmount') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exerciseinformations as $exerciseinformation): ?>
            <tr>
                <!--<td><?= $this->Number->format($exerciseinformation->id) ?></td> -->
                <td><?= h($exerciseinformation->title) ?></td>
                <td><?= $this->Number->format($exerciseinformation->weight) ?></td>
                <td><?= h($exerciseinformation->breakduration) ?></td>
                <td><?= $this->Number->format($exerciseinformation->repetition) ?></td>
                <td><?= $this->Number->format($exerciseinformation->setAmount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $exerciseinformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $exerciseinformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exerciseinformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exerciseinformation->id)]) ?>
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
