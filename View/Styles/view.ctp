<div class="styles view">
<h2><?php echo __('Style'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($style['Style']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($style['Style']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($style['Style']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($style['Style']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Style'), array('action' => 'edit', $style['Style']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Style'), array('action' => 'delete', $style['Style']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $style['Style']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Styles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Style'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Effects'), array('controller' => 'effects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Effect'), array('controller' => 'effects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Effects'); ?></h3>
	<?php if (!empty($style['Effect'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Style Id'); ?></th>
		<th><?php echo __('Effect'); ?></th>
		<th><?php echo __('Configuration'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Updated'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($style['Effect'] as $effect): ?>
		<tr>
			<td><?php echo $effect['id']; ?></td>
			<td><?php echo $effect['style_id']; ?></td>
			<td><?php echo $effect['effect']; ?></td>
			<td><?php echo $effect['configuration']; ?></td>
			<td><?php echo $effect['created']; ?></td>
			<td><?php echo $effect['updated']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'effects', 'action' => 'view', $effect['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'effects', 'action' => 'edit', $effect['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'effects', 'action' => 'delete', $effect['id']), array('confirm' => __('Are you sure you want to delete # %s?', $effect['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Effect'), array('controller' => 'effects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
