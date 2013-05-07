<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username', array('label' => 'USERNAME'));
        echo $this->Form->input('password', array('label' => 'PASSWORD'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('LOGIN')); ?>
</div>