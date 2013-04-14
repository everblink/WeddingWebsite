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
		<dt><?php echo __('isLeadGuest'); ?></dt>
		<dd>
        	<?php if (h($guest['Guest']['isLeadGuest']) == 1)  echo "Yes";  else echo "No" ; ?>
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
