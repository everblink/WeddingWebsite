<div class="rsvps form">
<?php echo $this->Form->create('Rsvp'); ?>
    <div class="rsvp_text">
		<h2><?php echo __('RSVP'); ?></h2><br/>
		PLEASE LET US KNOW IF YOU WILL BE ATTENDING BY 1ST JULY 2013<br/><br/>
		<div class="rsvp_checkboxes">
            <?php
                echo $this->Form->input('Guest_id', array('value' => $user, 'type' => 'hidden'));
                echo $this->Form->input('IsCeremony',
                                            array('label' => '<span></span>I WILL BE ATTENDING THE CEREMONY')
                                        );
                echo $this->Form->input('IsBanquet',
                                            array('label' => '<span></span>I WILL BE ATTENDING THE BANQUET')
                                        );
            ?>
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
