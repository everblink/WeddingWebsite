<div class="guests view">
<h2><?php  echo __('Guest'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['Id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FirstName'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['FirstName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LastName'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['LastName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['Username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['Password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($guest['Guest']['Role']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Guest'), array('action' => 'edit', $guest['Guest']['Id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Guest'), array('action' => 'delete', $guest['Guest']['Id']), null, __('Are you sure you want to delete # %s?', $guest['Guest']['Id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Guests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Guest'), array('action' => 'add')); ?> </li>
	</ul>
</div>
