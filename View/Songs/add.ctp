<div class="songs form">
<?php echo $this->Form->create('Song'); ?>
	<div class="request_song_text">
		<h2><?php echo __('REQUEST A SONG'); ?></h2><br/>
		PLEASE SUBMIT BELOW IF YOU WOULD LIKE TO<br/>
		REQUEST A SONG TO BE PLAYED DURING THE BANQUET.<br/>
		IT MAY JUST MAKE IT ONTO OUR PLAYLIST!<br/><br/><br/>
	<?php
		echo $this->Form->input('Artist', array('label' => 'ARTIST'));
		echo $this->Form->input('Title', array('label' => 'SONG'));
		echo $this->Form->input('Guest_id', array('value' => $user, 'type' => 'hidden'));
	?>
	</div>
<?php echo $this->Form->end(('')); ?>
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
<?php echo $this->Html->script('../js/songRequest'); ?>
