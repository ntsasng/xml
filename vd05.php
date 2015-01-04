<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tinh luong 2</title>
</head>
<body>
	<?php
		$dom = new DOMDocument();
		$dom->load('http://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx');
		$tigia = $dom->getElementsByTagName('Exrate')->item(18);
		$tigia = $tigia->getAttribute('Sell');
		// echo $tigia;

		$xml = new DOMDocument();
		$xml->load('bt.xml');
		$em = $xml->getElementsByTagName('EMPLOYEE');
		foreach ($em as $value) {
			$name = $value->getElementsByTagName('NAME')->item(0)->nodeValue;
			$position = $value->getElementsByTagName('POSITION')->item(0)->nodeValue;
			$salary = $value->getElementsByTagName('SALARY')->item(0)->nodeValue;
			$tien = $salary * $tigia;
			if ($tien > 5000000) {
				$luong = ($tien - ($tien - 5000000) * 0.05) * 12 + $tien;
			} else {
				$luong = $tien * 13;
			}
			echo "Ten: " . $name . "<br />";
			echo "Vi tri: " . $position . "<br />";
			echo "Luong: " . $luong . " (". $salary . "/thang)<hr />";
		}
	?>
</body>
</html>