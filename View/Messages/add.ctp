<!--<?php debug($user); ?>-->
<div class="messages form">
<?php echo $this->Form->create('Message'); ?>
	<div class="message_text">
		<h2><?php echo __('LEAVE US A NOTE'); ?></h2><br/>
	<?php
		echo $this->Form->input('Guest_id', array('value' => $user, 'type' => 'hidden'));
		echo $this->Form->textarea('Message');
	?>
	</div>
<?php echo $this->Form->end(('')); ?>
</div>