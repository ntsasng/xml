<?php
echo "<title>Chi tiet thong tin</title>";
echo "<meta charset='utf-8' />";
echo "<link rel='stylesheet' href='style.css' />";
$id = $_GET['id'];
$name = md5(md5(md5("sang")));
$xml = simplexml_load_file("cache/$name.xhtml");
$news = $xml->news;
foreach ( $news as $item ) {
	$nid = $item['newsid'];
	if ( $nid == $id ) {
		$title = $item->title;
		$author = $item->author;
		$full = $item->full;
		$image = $item->image;
		echo "<div class='news'>";
		echo "<h2 class='title'>$title</h2>";
		echo "<img src='$image'>";
		$full = str_replace("\n", "<br />", $full);
		echo "<p>$full</p>";
		echo "<a href='categories.php'>Back</a>";
		echo "</div>";
		break;
	}
}