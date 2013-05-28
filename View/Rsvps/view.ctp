<div class="rsvps_view">
<h2><?php  echo ('YOU HAVE RSVP\'D'); ?></h2>
	<div class="rsvp_view_text">
	    <?php if (($rsvp['Rsvp']['IsCeremony']) == 1 && ($rsvp['Rsvp']['IsBanquet']) == 1)
	        echo 'YOU ARE ATTENDING THE CEREMONY AND BANQUET <br/>'; ?>
	    <?php if (($rsvp['Rsvp']['IsCeremony']) == 1 && ($rsvp['Rsvp']['IsBanquet']) == 0)
        	echo 'YOU ARE ATTENDING THE CEREMONY <br/>'; ?>
        <?php if (($rsvp['Rsvp']['IsCeremony']) == 0 && ($rsvp['Rsvp']['IsBanquet']) == 1)
        	echo 'YOU ARE ATTENDING THE BANQUET <br/>'; ?>
        <?php if (($rsvp['Rsvp']['IsNotAttending']) == 1)
            echo 'YOU ARE NOT ATTENDING THE WEDDING :( <br/>';?>
        <br/><?php echo  $this->Html->image('text_divider.png')?><br/><br/>
        YOU'LL BE ACCOMPANIED BY THE FOLLOWING:<br/><br/>
        <?php foreach ($rsvp_plusones as $rsvp_plusone): ?>
            <?php echo $rsvp_plusone; ?><br/>
        <?php endforeach; ?>
        <br/><?php echo  $this->Html->image('text_divider.png')?><br/><br/>
        IF YOU NEED TO AMEND THE NUMBER OF GUESTS THAT YOU ARE BRINGING<br/>THEN PLEASE CONTACT JEFF DIRECTLY VIA 07701031726.
        <br/><br/><br/>
	    <?php echo $this->Html->link('',array('action' => 'edit', $rsvp['Rsvp']['Id']), array('id' => 'rsvp_plusone_edit'));
        ?>
	</div>
</div>
<?php
    if ($role == "admin")
    {
        echo
        "<div class=\"actions\">
            <h3>" . __('Actions') . "</h3>
            <ul>
                <li>" . $this->Html->link(__('Edit Rsvp'), array('action' => 'edit', $rsvp['Rsvp']['Id'])) . "</li>
                <li>" . $this->Form->postLink(__('Delete Rsvp'), array('action' => 'delete', $rsvp['Rsvp']['Id']), null, __('Are you sure you want to delete # %s?', $rsvp['Rsvp']['Id'])) . "</li>
                <li>" . $this->Html->link(__('List Rsvps'), array('action' => 'index')) . "</li>
                <li>" . $this->Html->link(__('New Rsvp'), array('action' => 'add')) . "</li>
                <li>" . $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')) . "</li>
                <li>" . $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')) . "</li>
            </ul>
        </div>";
     }
?>