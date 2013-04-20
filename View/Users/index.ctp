<!-- File: /wedding/View/Users/index.ctp -->
<h1>User Administration</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
		<th>Actions</th>
        <th>Created</th>
    </tr>

    <!-- Here is where we loop through our $users array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link
			($user['User']['username'],array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
		<td>
            <?php echo $this->Form->userLink(
                'Delete',
                array('action' => 'delete', $user['User']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>