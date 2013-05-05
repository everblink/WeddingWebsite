<div class="messages form">
<?php echo $this->Form->create('Message'); ?>
	<fieldset>
		<legend><?php echo __('Add Message'); ?></legend>
	<?php
		echo $this->Form->input('guest_id', array('value' => $user));
		echo $this->Form->textarea('Message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('SUBMIT')); ?>
</div>