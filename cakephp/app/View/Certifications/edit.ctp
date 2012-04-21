<div class="certifications form">
<?php echo $this->Form->create('Certification');?>
	<fieldset>
		<legend><?php echo __('Edit Certification'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('shift_type_id');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Certification.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Certification.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Certifications'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Shift Types'), array('controller' => 'shift_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shift Type'), array('controller' => 'shift_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
