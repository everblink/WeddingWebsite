<div class="guests form">
<?php echo $this->Form->create('Guest'); ?>
	<fieldset>
		<legend><?php echo __('Add Guest'); ?></legend>
	<?php
		echo $this->Form->input('FirstName');
		echo $this->Form->input('LastName');
		echo $this->Form->input('Email');
		echo $this->Form->input('Username');
		echo $this->Form->input('Password');
		echo $this->Form->input('Role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Guests'), array('action' => 'index')); ?></li>
	</ul>
</div>