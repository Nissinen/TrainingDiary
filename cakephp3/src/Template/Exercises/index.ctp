<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Exercise'), ['action' => 'add']) ?></li>
        <!--<li><?= $this->Html->link(__('List Exerciseinformations'), ['controller' => 'Exerciseinformations', 'action' => 'index']) ?></li>-->
        <!--<li><?= $this->Html->link(__('New Exerciseinformation'), ['controller' => 'Exerciseinformations', 'action' => 'add']) ?></li>-->
        <li><?= $this->Html->link(__('List Trainings'), ['controller' => 'Trainings', 'action' => 'index']) ?></li>
        <!--<li><?= $this->Html->link(__('New Training'), ['controller' => 'Trainings', 'action' => 'add']) ?></li>-->
    </ul>
</nav>
<div class="exercises index large-9 medium-8 columns content">
    <h3><?= __('Exercises') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
              <!--  <th><?= $this->Paginator->sort('id') ?></th> -->
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('maxweight') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exercises as $exercise): ?>
            <tr>
               <!-- <td><?= $this->Number->format($exercise->id) ?></td> -->
                <td><?= h($exercise->title) ?></td>
                <td><?= $this->Number->format($exercise->maxweight) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $exercise->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $exercise->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exercise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exercise->id)]) ?>
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
