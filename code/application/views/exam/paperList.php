<html>
	<head>
		<title>all paper</title>
	</head>

	<body>
	<?php foreach ($paper as $paper_item): ?>
		<h3>
		<a href="../index.php/question/detail/<?= $paper_item['id'] ?>"> <?= $paper_item['title']; ?></a>
		</h3>
	<?php endforeach; ?>

	</body>
</html>
