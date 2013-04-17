<div class="plusones view">
<h2><?php  echo __('Plusone'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plusone['Plusone']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guest'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plusone['Guest']['FirstName'], array('controller' => 'guests', 'action' => 'view', $plusone['Guest']['Id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($plusone['Plusone']['Firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($plusone['Plusone']['Lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dietary'); ?></dt>
		<dd>
			<?php echo h($plusone['Plusone']['Dietary']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plusone'), array('action' => 'edit', $plusone['Plusone']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plusone'), array('action' => 'delete', $plusone['Plusone']['Id']), null, __('Are you sure you want to delete # %s?', $plusone['Plusone']['Id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Plusones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plusone'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('controller' => 'guests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('controller' => 'guests', 'action' => 'add')); ?> </li>
	</ul>
</div>
