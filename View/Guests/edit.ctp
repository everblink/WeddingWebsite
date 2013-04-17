<div class="guests form">
<?php echo $this->Form->create('Guest'); ?>
	<fieldset>
		<legend><?php echo __('Edit Guest'); ?></legend>
	<?php
		echo $this->Form->input('Id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Guest.Id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Guest.Id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Guests'), array('action' => 'index')); ?></li>
	</ul>
</div>
