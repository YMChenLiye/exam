<html>
	<head>
		<title>Sign up</title>
	</head>

	<body>
	<?php echo validation_errors(); ?>

	<?php echo form_open('signup'); ?>

	<h5>Username</h5>
	<input type="text" name="username" value="<?= set_value('username'); ?>" size="50" />

	<h5>Password</h5>
	<input type="text" name="password" value="<?= set_value('password'); ?>" size="50" />

	<h5>Password Confirm</h5>
	<input type="text" name="passconf" value="<?= set_value('passconf'); ?>" size="50" />

	<div> <input type="submit" value="Submit" /> </div>

	</form>

	</body>
</html>
