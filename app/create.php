<?php
error_reporting(E_ALL ^ E_DEPRECATED);
require "connect.php";
$xml = new DOMDocument("1.0", "utf-8");
$cate = $xml->createElement("Category");
$xml->appendChild($cate);

$sql = "SELECT * FROM tbl_news ORDER BY news_id DESC";
$query = mysql_query($sql);
while ($data = mysql_fetch_assoc($query)) {
	$news = $xml->createElement("news");
	$cate->appendChild($news);
	$newsid = $xml->createAttribute("newsid");
	$news->appendChild($newsid);
	$vnewsid = $xml->createTextNode($data['news_id']);
	$newsid->appendChild($vnewsid);

	$title = $xml->createElement("title", $data['news_title']);
	$news->appendChild($title);

	$author = $xml->createElement("author", $data['news_author']);
	$news->appendChild($author);

	$info = $xml->createElement("info", $data['news_info']);
	$news->appendChild($info);

	$full = $xml->createElement("full");
	$news->appendChild($full);
	$vfull = $xml->createCDATASection($data['news_full']);
	$full->appendChild($vfull);

	$img = $xml->createElement("image", $data['news_img']);
	$news->appendChild($img);
}
$name = md5(md5(md5("sang")));
$xml->save("cache/$name.xhtml");
echo "Created xml file succuess";
echo "<br /><a href='add.php'>Back</a>";