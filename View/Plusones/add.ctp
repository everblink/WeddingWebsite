<div class="plusones form">
<?php echo $this->Form->create('Plusone'); ?>
	<fieldset>
		<legend><?php echo __('Add Plusone'); ?></legend>
	<?php
		echo $this->Form->input('Guest_id');
		echo $this->Form->input('Firstname');
		echo $this->Form->input('Lastname');
		echo $this->Form->input('Dietary');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Plusones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
