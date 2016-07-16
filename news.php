<?php
	include("components/post.php");
	$isql = mysqli_query($idb, "SELECT * FROM `news`");
	$news = $isql->fetch_all();
	foreach ($news as $post) {
		addPost($post[0], $post[1], $post[2]);
	}
?>