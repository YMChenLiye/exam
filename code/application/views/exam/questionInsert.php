<html>
	<head>
		<title>123</title>
	</head>

	<body>
	<?php echo validation_errors(); ?>
	<?php echo form_open('question/insert/'.$paperID); ?>
	<?php questionDetail($paperID); ?>

	<input type="submit" value"提交" />
	</body>

</html>

<?php 
function questionDetail($paperID)
{
?>
	paperID:
	<input type="text" name="paperID" value="<?= $paperID ?>" size="3" />
	<br />
	questionNum:
	<input type="text" name="questionNum" value="" size="3" />
	<br />
	type:
	<input type="text" name="type" value="" size="3" />
	<br />
	questionDescribe:
	<input type="text" name="questionDescribe" value="" size="300" />
	<br />

	score:
	<input type="text" name="score" value="" size="3" />
	<br />
	answer:
	<input type="text" name="answer" value="" size="3" />
	<br />
	optionA:
	<input type="text" name="optionA" value="" size="50" />
	<br />
	optionB:
	<input type="text" name="optionB" value="" size="50" />
	<br />
	optionC:
	<input type="text" name="optionC" value="" size="50" />
	<br />
	optionD:
	<input type="text" name="optionD" value="" size="50" />
	<br />
	optionE:
	<input type="text" name="optionE" value="" size="50" />
	<br />
	optionF:
	<input type="text" name="optionF" value="" size="50" />
	<br />

<?php
}
?>

