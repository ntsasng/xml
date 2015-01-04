<?php
echo "<title>Create XML file</title>";
$dom = new DOMDocument("1.0", "utf-8");
$A = $dom->createElement("A");
$dom->appendChild($A);

$B = $dom->createElement("B", "Sang");
$A->appendChild($B);

$codeid = $dom->createAttribute("codeid");
$B->appendChild($codeid);

$vcodeid = $dom->createTextNode("100");
$codeid->appendChild($vcodeid);

$C = $dom->createElement("C");
$A->appendChild($C);

$vc = $dom->createCDATASection("Nguyen");
$C->appendChild($vc);

$D = $dom->createElement("D", "Thanh");
$A->appendChild($D);

$dom->save('test.xml');
echo "Created success";
?>