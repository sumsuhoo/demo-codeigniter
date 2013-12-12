<html>
<head>
<title>My Form</title>
</head>
<body>

<h1> User List </h1>
<a href="add" >Add</a>
<table border='2'>
	<tr>
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	<?php foreach($userList as $user) :?>
	<tr>
		<td>
			<?php echo $user['username']; ?>
		</td>
		<td>
			<?php echo $user['password']; ?>
		</td>
		<td>
			<?php echo $user['email']; ?>
		</td>
		<td>
			<a href="<?php echo 'edit/'.$user['id']; ?>">Edit</a> 
		</td>
	</tr>
	<?php endforeach; ?>
</table>

</body>
</html>