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
	questionNum:
	<input type="text" name="questionNum" value="<?= $item['questionNum'] ?>" size="3" />

<?php 
}
?>
