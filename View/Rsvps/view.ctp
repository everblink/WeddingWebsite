<div class="rsvps view">
<h2><?php  echo __('Rsvp'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rsvp['Rsvp']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rsvp['Guest']['Id'], array('controller' => 'guests', 'action' => 'view', $rsvp['Guest']['Id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsCeremony'); ?></dt>
		<dd>
			<?php echo h($rsvp['Rsvp']['IsCeremony']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('IsBanquet'); ?></dt>
		<dd>
			<?php echo h($rsvp['Rsvp']['IsBanquet']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rsvp'), array('action' => 'edit', $rsvp['Rsvp']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rsvp'), array('action' => 'delete', $rsvp['Rsvp']['Id']), null, __('Are you sure you want to delete # %s?', $rsvp['Rsvp']['Id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rsvps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rsvp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
