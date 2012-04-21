<h3>Skift</h3>
<table>
<?php foreach($shifts as $shift): ?>
<tr>
	<td><?php echo $shift['ShiftType']['title'] ?></td>
	<td><?php echo $shift['ShiftType']['location'] ?></td>
	<td><?php echo $shift['Shift']['start'] ?></td>
	<td><?php echo $shift['Shift']['stop'] ?></td>
	<td><?php echo $this->Html->link('Ta skift', '/shifts/take/' . $shift['Shift']['id']) ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php echo $this->Html->link('Legg til nytt skift', '/shifts/add') ?>

<h3 style="margin-top:100px;">Noen andre lenker</h3>
<ul>
<li><?php echo $this->Html->link('Users', '/users') ?></li>
<li><?php echo $this->Html->link('Shift types', '/shift_types') ?></li>
<li><?php echo $this->Html->link('Certification', '/certifications') ?></li>
</ul>
