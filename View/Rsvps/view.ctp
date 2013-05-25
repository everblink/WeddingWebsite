<div class="rsvps view">
<h2><?php  echo ('YOU HAVE CURRENTLY RSVP\'D'); ?></h2>
	<dl>
		<dt><?php echo __('Guest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rsvp['Guest']['FirstName'], array('controller' => 'guests', 'action' => 'view', $rsvp['Guest']['Id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo ('ARE YOU ATTENDING THE CEREMONY?'); ?></dt>
		<dd>
			<?php   if (($rsvp['Rsvp']['IsCeremony']) == 1)
			            echo 'YES';
                    else
					    echo 'NO';
            ?>
			&nbsp;
		</dd>
		<dt><?php echo ('ARE YOU ATTENDING THE RECEPTION/BANQUET?'); ?></dt>
		<dd>
			<?php   if (($rsvp['Rsvp']['IsBanquet']) == 1)
			            echo 'YES';
			        else
			            echo 'NO';
			?>
			&nbsp;
		</dd>
		<dt><?php echo ('ARE YOU NOT COMING AT ALL?'); ?></dt>
		<dd>
			<?php   if (($rsvp['Rsvp']['IsNotAttending']) == 1)
                        echo 'SORRY AFRAID NOT';
                    else
                        echo 'I\'M DEFINITELY COMING';
			?>
			&nbsp;
		</dd>
	    <?php echo $this->Html->link(__('Edit Rsvp'), array('action' => 'edit', $rsvp['Rsvp']['Id'])); ?>
	</dl>
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