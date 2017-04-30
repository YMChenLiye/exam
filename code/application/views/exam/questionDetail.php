<html>
	<head>
		<title><?= $title ?></title>
	</head>

	<body>
	<?php foreach($result as $item): ?>
		<?php questionDetail($item); ?>
		<br />
	<?php endforeach; ?>
	<br />
	<br />
	<input type="submit" value="交卷" />
	</body>
</html>


<?php
function questionDetail($item)
{
	echo "<h5>";
	echo $item['questionNum'];
	echo ".";
	echo $item['questionDescribe'];
	echo "</h5>";

	if($item['type'] == 1)
	{
		$type = "radio";
	}
	else if($item['type'] == 2)
	{
		$type = "checkbox";
	}
	else if($item['type'] == 3)
	{
		echo "\n";
		echo "<input type=";
		echo "\"";
		echo "text";
		echo "\"";
		echo " size=";
		echo "\"";
		echo "100";
		echo "\"";
		echo "<br />";

		return;
	}


	if(isset($item['optionA']))
	{
		echo "\n";
		echo "<input type=";
		echo "\"";
		echo "$type";
		echo "\"";
		echo " name=";
		echo "\"";
		echo $item['questionNum'];
		echo "\"";
		echo " value=\"A\"";
		echo "/>";
		echo $item['optionA'];
		echo "<br />";
	}

	if(isset($item['optionB']))
	{
		echo "\n";
		echo "<input type=";
		echo "\"";
		echo "$type";
		echo "\"";
		echo " name=";
		echo "\"";
		echo $item['questionNum'];
		echo "\"";
		echo " value=\"B\"";
		echo "/>";
		echo $item['optionB'];
		echo "<br />";
	}

	if(isset($item['optionC']))
	{
		echo "\n";
		echo "<input type=";
		echo "\"";
		echo "$type";
		echo "\"";
		echo " name=";
		echo "\"";
		echo $item['questionNum'];
		echo "\"";
		echo " value=\"C\"";
		echo "/>";
		echo $item['optionC'];
		echo "<br />";
	}

	if(isset($item['optionD']))
	{
		echo "\n";
		echo "<input type=";
		echo "\"";
		echo "$type";
		echo "\"";
		echo " name=";
		echo "\"";
		echo $item['questionNum'];
		echo "\"";
		echo " value=\"D\"";
		echo "/>";
		echo $item['optionD'];
		echo "<br />";
	}

	if(isset($item['optionE']))
	{
		echo "\n";
		echo "<input type=";
		echo "\"";
		echo "$type";
		echo "\"";
		echo " name=";
		echo "\"";
		echo $item['questionNum'];
		echo "\"";
		echo " value=\"E\"";
		echo "/>";
		echo $item['optionE'];
		echo "<br />";
	}

	if(isset($item['optionF']))
	{
		echo "\n";
		echo "<input type=";
		echo "\"";
		echo "$type";
		echo "\"";
		echo " name=";
		echo "\"";
		echo $item['questionNum'];
		echo "\"";
		echo " value=\"F\"";
		echo "/>";
		echo $item['optionF'];
		echo "<br />";
	}


}


