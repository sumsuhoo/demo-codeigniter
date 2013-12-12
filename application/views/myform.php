<?php
//print_r("hiiiiiidd");exit();
if (isset($item_query)):
	print_r($item_query);
    $item = $item_query->row();
endif;
?>
<html>
<head>
<title>My Form</title>
</head>
<body>

<?php //echo validation_errors(); ?>

<?php echo form_open('form/add'); ?>

<?php  $hidden = array('id' => (isset($item->id) ? $item->id : '')); ?>

<h5>Username</h5>
<?php echo form_error('username'); ?>
<input type="text" name="username" 
		value="<?php 
			if(set_value('username') != '') :
				echo set_value('username');
			else : 
				echo isset($item) ? @$item->username : ''; 
			endif; ?>" 
		size="50" />

<h5>Password</h5>
<?php echo form_error('password'); ?>
<input type="password" name="password" 
		value="<?php 
			if(set_value('password') != '') : 
				echo set_value('password'); 
			else :
				isset($item) ? @$item->password : '';
			endif; ?>" 
		size="50" />

<h5>Password Confirm</h5>
<?php echo form_error('passconf'); ?>
<input type="text" name="passconf" 
		value="<?php 
			if(set_value('passconf') != '') :
				echo set_value('password'); 
			else :
				isset($item) ? @$item->password : ''; 
			endif; ?>" 
		size="50" />

<h5>Email Address</h5>
<?php  echo form_error('email'); ?>
<input type="text" name="email" 
		value="<?php 
			if(set_value('email') != '') :
				echo set_value('email'); 
			else :
				isset($item) ? @$item->email : ''; 
			endif; ?>" 
		size="50" />

<div><input type="submit" value="Submit" /> <a href="index">Home</a></div>

</form>

</body>
</html>
<?php  ?>
