<div class="songs form">
<?php echo $this->Form->create('Song'); ?>
	<fieldset>
		<h2><?php echo __('REQUEST A SONG'); ?></h2><br/>
	<?php
		echo $this->Form->input('Artist', array('label' => 'ARTIST'));
		echo $this->Form->input('Title', array('label' => 'TITLE'));
		echo $this->Form->input('Guest_id', array('value' => $user, 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('SUBMIT')); ?>
</div>
<?php
    if ($role == "admin")
    {
        echo "<div class=\"actions\">
             	<h3>" . __('Actions') . "</h3>
             	<ul>
             		<li>" . $this->Html->link(__('List Songs'), array('action' => 'index')) . "</li>
             		<li>" . $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')). "</li>
             		<li>" . $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')) . "</li>
             	</ul>
             </div>";
    }
?>
