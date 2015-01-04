<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lay tin tuc tu VNE</title>
</head>
<body>
	<?php
		$xml = simplexml_load_file('http://vnexpress.net/rss/tin-moi-nhat.rss');
		$item = $xml->channel->item;
		$count = 1;
		foreach ($item as $data) {
			echo $data->title . "<br />";
			echo $data->description . "<br />";
			echo "<hr />";
			$count++;
			if ( $count > 10 )
				break;
		}


	?>
</body>
</html>