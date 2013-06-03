<div class="rsvps form">
<?php echo $this->Form->create('Rsvp'); ?>
    <div class="rsvp_text">
		<h2><?php echo __('RSVP'); ?></h2><br/>
		LET US KNOW IF YOU WILL BE ATTENDING BY 1ST JULY 2013<br/>
		PLEASE TICK ALL THAT APPLY:<br/><br/>
		<div id="rsvp_checkboxes">
            <?php
                echo $this->Form->create('Rsvp', array('action' => 'edit'));
                echo $this->Form->input('Rsvp.Guest_id', array('value' => $user, 'type' => 'hidden'));
                echo $this->Form->input('Rsvp.Id', array('value' => $rsvp_id, 'type' => 'hidden'));
                echo $this->Form->input('Rsvp.IsCeremony', array('label' => '<span></span>I WILL BE ATTENDING THE CEREMONY', 'onclick' => 'clearNotAttending()'));
                echo $this->Form->input('Rsvp.IsBanquet', array('label' => '<span></span>I WILL BE ATTENDING THE BANQUET', 'onclick' => 'clearNotAttending()'));
                echo $this->Form->input('Rsvp.IsNotAttending', array('label' => '<span></span>SORRY I/WE CAN\'T MAKE IT', 'onclick' => 'notAttending()'));
            ?>
        </div>
    </div>
<?php echo $this->Form->end((''));?>
</div>
<?php
    if ($role == "admin")
    {
        echo "<div class=\"actions\">
             	<h3>" . __('Actions') . "</h3>
             	<ul>
             		<li>" . $this->Html->link(__('List Rsvps'), array('action' => 'index')) . "</li>
             		<li>" . $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')). "</li>
             		<li>" . $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')) . "</li>
             	</ul>
             </div>";
    }
?>
<div id="dialog-modal" title="FRIENDLY MESSAGE">
  <p>SORRY BUT YOU CAN'T HAVE THAT MANY PLUS ONES, WE'RE NOT MADE OUT OF MONEY ;).</p>
</div>
<div id="validate-modal" title="FRIENDLY MESSAGE">
  <p>YOU FORGOT TO SAY IF YOU ARE ATTENDING OR NOT :(.</p>
</div>
<?php echo $this->Html->script('../js/editRsvp'); ?>
