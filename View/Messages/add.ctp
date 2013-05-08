<!--<?php debug($user); ?>-->
<div class="messages form">
<?php echo $this->Form->create('Message'); ?>
	<fieldset>
		<h2><?php echo __('LEAVE US A MESSAGE'); ?></h2><br/>
	<?php
		echo $this->Form->input('Guest_id', array('value' => $user, 'type' => 'hidden'));
		echo $this->Form->textarea('Message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('SUBMIT')); ?>
</div>