<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
     <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
       <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Trainings'), ['controller' => 'Trainings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Trainings', 'action' => 'add']) ?></li> 
    </ul>
</nav>-->

<?= $this->Html->css('login.css') ?>
<div class="users form large-12 medium-8 columns content">
	<div class="Content2">
		<?= $this->Form->create($user) ?>
		<fieldset>
			<legend><?= __('Register') ?></legend>
			<?php
				echo $this->Form->input('username');
				echo $this->Form->input('email');
				echo $this->Form->input('password');
				echo $this->Form->input('firstname');
				echo $this->Form->input('lastname');
			?>
		</fieldset>
		<div class="ButtonContent">
		<?= $this->Form->button(__('Submit')) ?>
		<?= $this->Form->end() ?>
		</div>
	</div>
</div>
