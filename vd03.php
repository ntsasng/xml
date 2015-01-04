<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lay ti gia VCB</title>
	<style>
		table {
			border: 1px solid #d0d0d0;
			width: 80%;
			margin: 0 auto;
			text-align: center;
		}
		td {
			border: 1px solid #d0d0d0;
		}

	</style>
</head>
<body>
	<table>
		<tr><td colspan="5"><h1>Bang ti gia tien cua VCB</h1></td></tr>
		<tr>
			<td>Ma code</td>
			<td>Ten tien te</td>
			<td>Mua vao</td>
			<td>Ban ra</td>
			<td>Chuyen khoan</td>
		</tr>
	
	<?php
		$dom = new DOMDocument();
		$dom->load("http://www.vietcombank.com.vn/ExchangeRates/ExrateXML.aspx");
		$exrate = $dom->getElementsByTagName('Exrate');
		foreach ($exrate as $value) {
			$name = $value->getAttribute('CurrencyName');
			$code = $value->getAttribute('CurrencyCode');
			$buy = $value->getAttribute('Buy');
			$sell = $value->getAttribute('Sell');
			$tran = $value->getAttribute('Transfer');
			echo "<tr>";
			echo "<td>$code</td>";
			echo "<td>$name</td>";
			echo "<td>$buy</td>";
			echo "<td>$sell</td>";
			echo "<td>$tran</td>";
			echo "</tr>";
		}

	?>
	</table>
</body>
</html>