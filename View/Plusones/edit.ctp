<div class="plusones form">
<?php echo $this->Form->create('Plusone'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plusone'); ?></legend>
	<?php
		echo $this->Form->input('Id');
		echo $this->Form->input('Guest_id');
		echo $this->Form->input('Name');
		echo $this->Form->input('Dietary');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Plusone.Id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Plusone.Id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Plusones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
