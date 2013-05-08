<div class="rsvps index">
	<h2><?php echo __('Rsvps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Guest_id'); ?></th>
			<th><?php echo $this->Paginator->sort('IsCeremony'); ?></th>
			<th><?php echo $this->Paginator->sort('IsBanquet'); ?></th>
			<th><?php echo $this->Paginator->sort('IsNotAttending'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($rsvps as $rsvp): ?>
	<tr>
		<td><?php echo h($rsvp['Rsvp']['Id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rsvp['Guest']['FirstName'], array('controller' => 'guests', 'action' => 'view', $rsvp['Guest']['Id'])); ?>
		</td>
		<td><?php echo h($rsvp['Rsvp']['IsCeremony']); ?>&nbsp;</td>
		<td><?php echo h($rsvp['Rsvp']['IsBanquet']); ?>&nbsp;</td>
		<td><?php echo h($rsvp['Rsvp']['IsNotAttending']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rsvp['Rsvp']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rsvp['Rsvp']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rsvp['Rsvp']['Id']), null, __('Are you sure you want to delete # %s?', $rsvp['Rsvp']['Id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Rsvp'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
