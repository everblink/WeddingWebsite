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
<?php
    if ($role == "admin")
    {
        echo "<div class=\"actions\">
             	<h3>" . __('Actions') . "</h3>
             	<ul>
             		<li>" . $this->Html->link(__('List Messages'), array('action' => 'index')) . "</li>
             		<li>" . $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')). "</li>
             		<li>" . $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')) . "</li>
             	</ul>
             </div>";
    }
?>
</div>