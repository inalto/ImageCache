<div class="effects index">
	<h2><?php echo __('Effects'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('style_id'); ?></th>
			<th><?php echo $this->Paginator->sort('effect'); ?></th>
			<th><?php echo $this->Paginator->sort('configuration'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($effects as $effect): ?>
	<tr>
		<td><?php echo h($effect['Effect']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($effect['Style']['name'], array('controller' => 'styles', 'action' => 'view', $effect['Style']['id'])); ?>
		</td>
		<td><?php echo h($effect['Effect']['effect']); ?>&nbsp;</td>
		<td><?php echo h($effect['Effect']['configuration']); ?>&nbsp;</td>
		<td><?php echo h($effect['Effect']['created']); ?>&nbsp;</td>
		<td><?php echo h($effect['Effect']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $effect['Effect']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $effect['Effect']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $effect['Effect']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $effect['Effect']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Effect'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Styles'), array('controller' => 'styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Style'), array('controller' => 'styles', 'action' => 'add')); ?> </li>
	</ul>
</div>
