<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <div class="request_song_text">
        <legend><?php echo __('PLEASE ENTER YOUR USERNAME AND PASSWORD'); ?></legend><br/>
        <?php echo $this->Form->input('username', array('label' => 'USERNAME'));
        echo $this->Form->input('password', array('label' => 'PASSWORD'));
    ?>
    </div>
<?php echo $this->Form->end(('')); ?>
</div>