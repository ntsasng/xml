<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tinh tuong 3</title>
</head>
<body>
	<?php
		$xml = new DOMDocument();
		$xml->load('bt.xml');
		$cus = $xml->getElementsByTagName('CUSTOMER');
		foreach ($cus as $value) {
			$first_name = $value->getElementsByTagName('FIRSTNAME')->item(0)->nodeValue;
			$last_name = $value->getElementsByTagName('LASTNAME')->item(0)->nodeValue;
			$id = $value->getAttribute('ID');
			echo "Name: $first_name $last_name ($id) <br />";
			$product = $value->getElementsByTagName('PRODUCT');
			foreach ($product as $provalue) {
				$proname = $provalue->getElementsByTagName('NAME')->item(0)->nodeValue;
				$proqua = $provalue->getElementsByTagName('QUANTITY')->item(0)->nodeValue;
				$proprice = $provalue->getElementsByTagName('PRICE')->item(0)->nodeValue;
				echo "$proname - $proqua - $proprice<br />";
			}
			echo "<hr />";
		}


	?>
</body>
</html>