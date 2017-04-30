<html>
	<head>
		<title>new paper</title>
	</head>

	<body>
	<?php echo validation_errors(); ?>
	
	<?php echo form_open('paper/insert'); ?>

	<h5>title</h5>
	<input type="text" name="title" value="<?= set_value('title'); ?>" size="50" />
	
	<input type="submit" value="Submit" />

	</form>

	</body>
</html>
