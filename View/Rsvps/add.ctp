<div class="rsvps form">
<?php echo $this->Form->create('Rsvp'); ?>
    <div class="rsvp_text">
		<h2><?php echo __('RSVP'); ?></h2><br/>
		LET US KNOW IF YOU WILL BE ATTENDING BY 1ST JULY 2013<br/>
		PLEASE TICK ALL THAT APPLY:<br/><br/>
		<div id="rsvp_checkboxes">
            <?php
                echo $this->Form->create('Rsvp', array('action' => 'add'));

                echo $this->Form->input('Rsvp.Guest_id', array('value' => $user, 'type' => 'hidden'));
                echo $this->Form->input('Rsvp.IsCeremony', array('label' => '<span></span>I WILL BE ATTENDING THE CEREMONY', 'onclick' => 'clearNotAttending()'));
                echo $this->Form->input('Rsvp.IsBanquet', array('label' => '<span></span>I WILL BE ATTENDING THE BANQUET', 'onclick' => 'clearNotAttending()'));
                echo $this->Form->input('Rsvp.IsNotAttending', array('label' => '<span></span>SORRY I/WE CAN\'T MAKE IT', 'onclick' => 'notAttending()'));
            ?>
            <br/><br/>ADD EXTRA GUEST(S) (IF APPLICABLE)<br/><br/>
            <div id="plusone[0]" class="plusone_div">
                <input name="add_plusone_button" id="add_plusone_button" type="button" title="Add" />
                <input name="data[Plusone][0][Guest_id]" type="hidden" id="PlusoneGuest_id" value=<?php echo $user; ?> />
                <input name="data[Plusone][0][Name]" class="PlusoneName" type="text" id="PlusoneName" placeholder="Please enter one guest at a time" title="Enter a name and then click on the '+' button if you have more than one guest to add"/>
            </div>
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
<?php echo $this->Html->script('../js/rsvp'); ?>
