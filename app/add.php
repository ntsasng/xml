<?php
error_reporting(E_ALL ^ E_DEPRECATED);
if (isset($_POST['ok'])) {
	$title 		= $_POST['news_title'];
	$author 	= $_POST['author'];
	$news_info	= $_POST['news_info'];
	$news_full	= $_POST['news_full'];
	move_uploaded_file($_FILES['img']['tmp_name'], 'data/'.$_FILES['img']['name']);
	$image = 'data/' . $_FILES['img']['name'];
	if ( $title && $author && $news_info && $news_full && $image ) {
		require "connect.php";
		$sql = "INSERT INTO tbl_news (news_title, news_author, news_info, news_full, news_img) VALUES ('$title', '$author', '$news_info', '$news_full', '$image')";
		mysql_query($sql);
		echo "<h2 style='text-align: center'>Them tin tuc thanh cong</h2>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add data DB</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<a style='display: block; text-align: center;' href="create.php">Create file XML</a>
	<a style='display: block; text-align: center;' href='categories.php'>View category</a>
	<form action="add.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Input data form</legend>
			News title:<br> <input type="text" name="news_title"><br>
			Author: <br><input type="text" name="author"><br>
			News info: <br><textarea name="news_info" cols="40" rows="10"></textarea><br>
			News Full: <br><textarea name="news_full" cols="40" rows="10"></textarea><br>
			Image:  <br><input type="file" name="img"><br>
			<input type="submit" value="Submit" name="ok" />
		</fieldset>
	</form>
	
</body>
</html>