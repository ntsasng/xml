<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple XML</title>
</head>
<body>
	<?php
		$dom = simplexml_load_file('vd.xml');
		$chapt2 = $dom->info->chapter[2]->chapter_title;
		$att2 = $dom->info->chapter[2]['codeid'];
		echo "$chapt2 - $att2 <hr />";
		$chap = $dom->info->chapter;
		foreach ($chap as $value) {
			echo $value->chapter_title . "<br />";
			echo $value->chapter_rank . "<br />";
			echo $value['codeid'] . "<hr />";
		}

	?>
</body>
</html>