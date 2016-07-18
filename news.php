<?php
	include("components/post.php");
	$isql = mysqli_query($idb, "SELECT * FROM `news`");
	$news = $isql->fetch_all();
	foreach ($news as $post) {
		$isql = mysqli_query($idb, "SELECT * FROM `comments` WHERE `id` IN (SELECT `comment_id` FROM `newscomments` WHERE `news_id` = " . $post[0] . ")");
		$comments = $isql->fetch_all();
		addPost($post[0], $post[1], $post[2], $comments);
	}
?>