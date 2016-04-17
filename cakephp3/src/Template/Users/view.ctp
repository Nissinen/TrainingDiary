<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?php if($loggedUser['role'] == 'admin' || $loggedUser['id'] == $this->request->params['pass'][0]) {
                echo $this->Html->link(__('Edit your profile'), ['action' => 'edit', $user->id]); } ?> </li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Trainings', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Exercises'), ['controller' => 'Exercises', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exercise'), ['controller' => 'Exercises', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exerciseinformations'), ['controller' => 'Exerciseinformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exerciseinformation'), ['controller' => 'Exerciseinformations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('New Training Result'), ['controller' => 'Results', 'action' => 'add']) ?> </li>
	</ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <div class="related">
        <h3><?= __('Trainings') ?></h3>
        <?php if (!empty($user->trainings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
               <!-- <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>-->
                <th><?= __('Title') ?></th>
                <th><?= __('Duration') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->trainings as $trainings): ?>
            <tr>
              <!--  <td><?= h($trainings->id) ?></td>
                <td><?= h($trainings->user_id) ?></td> -->
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
    <h3><?= h('Profile') ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Firstname') ?></th>
            <td><?= h($user->firstname) ?></td>
        </tr>
        <tr>
            <th><?= __('Lastname') ?></th>
            <td><?= h($user->lastname) ?></td>
        </tr>
        <!--<tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>-->
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>

</div>
