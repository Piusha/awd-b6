<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'AutoLoader.php';

Framework\AutoLoader::requires('framework/config');
Framework\AutoLoader::requires('framework/core');
Framework\AutoLoader::requires('framework/models');
$userObj = new Model\User();
$userList = $userObj->getAllUsers();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<table>
		<tr>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Email</td>
			<td>Gender</td>
			<td>Address</td>
		</tr>

		
		<?php  foreach ($userList as $user):?>
			<tr>
				<td><?php echo $user['first_name'] ?></td>
				<td><?php echo $user['last_name'] ?></td>
				<td><?php echo $user['email'] ?></td>
				<td><?php echo $user['gender'] ?></td>
				<td><?php echo $user['address'] ?></td>
			
			</tr>
		<?php  endforeach ?>
	</table>
</body>
</html>