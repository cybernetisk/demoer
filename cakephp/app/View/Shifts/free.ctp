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
