<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP DOM example </title>
</head>
<body>
<?php
	$dom = new DOMDocument();
	$dom->load('vd.xml');
	$title = $dom->getElementsByTagName('chapter_title')->item(1)->nodeValue;
	echo $title . "<br />";
	$att = $dom->getElementsByTagName('chapter')->item(1);
	$att = $att->getAttribute('codeid');
	echo $att;
	echo "<hr />";
	$chap = $dom->getElementsByTagName('chapter');
	foreach ($chap as $value) {
		$title = $value->getElementsByTagName('chapter_title')->item(0)->nodeValue;
		$code = $value->getAttribute('codeid');
		$rank = $value->getElementsByTagName('chapter_rank')->item(0)->nodeValue;
		echo $code . "<br />";
		echo $rank . "<br />";
		echo $title . "<hr />";
	}
?>
	
</body>
</html>