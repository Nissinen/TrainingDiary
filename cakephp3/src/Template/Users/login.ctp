<!-- File: src/Template/Users/login.ctp -->

<?= $this->Html->css('login.css') ?>
<div id="Container">
	<div class="Content">
		<?= $this->Flash->render('auth') ?>
		<?= $this->Form->create() ?>
		<fieldset>
			<legend><?= __('Please enter your username and password') ?></legend>
			<?= $this->Form->input('username') ?>
			<?= $this->Form->input('password') ?>
		</fieldset>
	</div>
	<div class="ButtonContent">
		<?= $this->Form->button(__('Login')); ?>
		<?= $this->Form->end() ?>
	</div>
</div>