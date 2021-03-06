<div class="guests index">
	<h2><?php echo __('Guests'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('FirstName'); ?></th>
			<th><?php echo $this->Paginator->sort('LastName'); ?></th>
			<th><?php echo $this->Paginator->sort('Email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($guests as $guest): ?>
	<tr>
		<td><?php echo h($guest['Guest']['Id']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['FirstName']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['LastName']); ?>&nbsp;</td>
		<td><?php echo h($guest['Guest']['Email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $guest['Guest']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $guest['Guest']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $guest['Guest']['Id']), null, __('Are you sure you want to delete # %s?', $guest['Guest']['Id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Guest'), array('action' => 'add')); ?></li>
	</ul>
</div>
