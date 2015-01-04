<?php
echo "<meta charset='utf-8' />";
echo "<title>Doc file xml</title>";
echo "<link rel='stylesheet' href='style.css' />";
echo "<a style='display: block; text-align: center;' href='add.php'>Add data</a>";
$name = md5(md5(md5("sang")));
$xml = simplexml_load_file("cache/$name.xhtml");
$news = $xml->news;
foreach ($news as $value) {
	$title = $value->title;
	$author = $value->author;
	$info = $value->info;
	$image = $value->image;
	$newsid = $value['newsid'];
	echo "<div class='news'>";
	echo "<h3>$title</h3>";
	echo "<img src='$image' />";
	echo "<p>$info</p>";
	echo "<a href='read.php?id=$newsid'>Read more</a>";
	echo "</div>";
}