<?php echo $this->Html->script('../js/rsvp'); ?>
<div class="rsvps form">
<?php echo $this->Form->create('Rsvp'); ?>
    <div class="rsvp_text">
		<h2><?php echo __('RSVP'); ?></h2><br/>
		LET US KNOW IF YOU WILL BE ATTENDING BY 1ST JULY 2013<br/>
		PLEASE TICK ALL THAT APPLY:<br/><br/>
		<div class="rsvp_checkboxes">
            <?php
                echo $this->Form->create('Rsvp', array('action' => 'add'));

                echo $this->Form->input('Rsvp.Guest_id', array('value' => $user, 'type' => 'hidden'));
                echo $this->Form->input('Rsvp.IsCeremony', array('label' => '<span></span>I WILL BE ATTENDING THE CEREMONY', 'onclick' => 'clearNotAttending()'));
                echo $this->Form->input('Rsvp.IsBanquet', array('label' => '<span></span>I WILL BE ATTENDING THE BANQUET', 'onclick' => 'clearNotAttending()'));
                echo $this->Form->input('Rsvp.IsNotAttending', array('label' => '<span></span>SORRY I/WE CAN\'T MAKE IT', 'onclick' => 'notAttending()'));
            ?>
            <br/>ADD EXTRA GUEST(S) (IF APPLICABLE)
            <div id="plusone_input">
                <br/><input name="add_plusone_button" id="add_plusone_button" type="button" onclick="addPlusone();">
                <?php
                    echo $this->Form->input('Plusone.Guest_id', array('value' => $user, 'type' => 'hidden'));
                    echo $this->Form->input('Plusone.Name', array('label' => false, 'div' => false));
                    echo $this->Form->input('incremental_value', array('value' => '0', 'type' => 'hidden'));
                ?>

            </div>
        </div>
    </div>
<?php echo $this->Form->end(__('SUBMIT')); ?>
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
