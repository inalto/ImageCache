<div class="effects view">
<h2><?php echo __('Effect'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($effect['Effect']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Style'); ?></dt>
		<dd>
			<?php echo $this->Html->link($effect['Style']['name'], array('controller' => 'styles', 'action' => 'view', $effect['Style']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Effect'); ?></dt>
		<dd>
			<?php echo h($effect['Effect']['effect']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Configuration'); ?></dt>
		<dd>
			<?php echo h($effect['Effect']['configuration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($effect['Effect']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($effect['Effect']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Effect'), array('action' => 'edit', $effect['Effect']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Effect'), array('action' => 'delete', $effect['Effect']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $effect['Effect']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Effects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Effect'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Styles'), array('controller' => 'styles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Style'), array('controller' => 'styles', 'action' => 'add')); ?> </li>
	</ul>
</div>
