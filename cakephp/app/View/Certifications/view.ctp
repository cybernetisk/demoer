<div class="certifications view">
<h2><?php  echo __('Certification');?></h2>
	<dl>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($certification['User']['id'], array('controller' => 'users', 'action' => 'view', $certification['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shift Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($certification['ShiftType']['title'], array('controller' => 'shift_types', 'action' => 'view', $certification['ShiftType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($certification['Certification']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Certification'), array('action' => 'edit', $certification['Certification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Certification'), array('action' => 'delete', $certification['Certification']['id']), null, __('Are you sure you want to delete # %s?', $certification['Certification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shift Types'), array('controller' => 'shift_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shift Type'), array('controller' => 'shift_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
