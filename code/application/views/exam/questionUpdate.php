<html>
	<head>
	 	<title><?= $title ?></title>
	</head>

	<body>
	<?php foreach($result as $item): ?>
		<?php questionDetail($item); ?>
		<br />
	<?php endforeach; ?>
	</body>
</html>

<?php
function questionDetail($item)
{
?>
	paperID:
	<input type="text" name="paperID" value="<?= $item['paperID'] ?>" size="3" />
	<br />
	questionNum:
	<input type="text" name="questionNum" value="<?= $item['questionNum'] ?>" size="3" />
	<br />
	type:
	<input type="text" name="type" value="<?= $item['type'] ?>" size="3" />
	<br />
	questionDescribe:
	<input type="text" name="questionDescribe" value="<?= $item['questionDescribe'] ?>" size="300" />
	<br />

	score:
	<input type="text" name="score" value="<?= $item['score'] ?>" size="3" />
	<br />
	answer:
	<input type="text" name="answer" value="<?= $item['answer'] ?>" size="3" />
	<br />
	optionA:
	<input type="text" name="optionA" value="<?= $item['optionA'] ?>" size="50" />
	<br />
	optionB:
	<input type="text" name="optionB" value="<?= $item['optionB'] ?>" size="50" />
	<br />
	optionC:
	<input type="text" name="optionC" value="<?= $item['optionC'] ?>" size="50" />
	<br />
	optionD:
	<input type="text" name="optionD" value="<?= $item['optionD'] ?>" size="50" />
	<br />
	optionE:
	<input type="text" name="optionE" value="<?= $item['optionE'] ?>" size="50" />
	<br />
<?php 
}
?>
