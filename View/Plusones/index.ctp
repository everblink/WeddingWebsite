<div class="plusones index">
	<h2><?php echo __('Plusones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Id'); ?></th>
			<th><?php echo $this->Paginator->sort('Guest_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('Lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('Dietary'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($plusones as $plusone): ?>
	<tr>
		<td><?php echo h($plusone['Plusone']['Id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plusone['Guest']['FirstName'], array('controller' => 'guests', 'action' => 'view', $plusone['Guest']['Id'])); ?>
		</td>
		<td><?php echo h($plusone['Plusone']['Firstname']); ?>&nbsp;</td>
		<td><?php echo h($plusone['Plusone']['Lastname']); ?>&nbsp;</td>
		<td><?php echo h($plusone['Plusone']['Dietary']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plusone['Plusone']['Id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plusone['Plusone']['Id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plusone['Plusone']['Id']), null, __('Are you sure you want to delete # %s?', $plusone['Plusone']['Id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Plusone'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
