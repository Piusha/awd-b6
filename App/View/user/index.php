<table>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Address</th>
	
	</tr>

	<?php foreach($this->view->users as $user): ?>

		<tr>
			<td> <?php echo $user['id'] ?> </td>
			<td> <?php echo $user['first_name'] ?> </td>
			<td> <?php echo $user['last_name'] ?> </td>
			<td> <?php echo $user['email'] ?> </td>
			<td> <?php echo $user['gender'] ?> </td>
			<td> <?php echo $user['address'] ?> </td>
		</tr>
	<?php endforeach ?>
</table>