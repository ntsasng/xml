<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tinh luong</title>
</head>
<body>
	<?php
		$dom = new DOMDocument();
		$dom->load('bt.xml');
		$em = $dom->getElementsByTagName('EMPLOYEE');
		foreach ($em as $value) {
			$name = $value->getElementsByTagName('NAME')->item(0)->nodeValue;
			$position = $value->getElementsByTagName('POSITION')->item(0)->nodeValue;
			$salary = $value->getElementsByTagName('SALARY')->item(0)->nodeValue;
			echo $name . "<br />";
			echo $position . "<br />";
			echo $salary . "<hr />";
		}
	?>
</body>
</html>