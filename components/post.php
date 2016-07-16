<?php
include("comments/tree.php");
function addPost($id, $title, $text){
	echo '<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">' . $title . '</h3>
			  </div>
			  <div class="panel-body">
			    ' . $text . '
			  </div>
			  <div class="panel-footer">';
    setTree($id);
  	echo 	  '</div>
		  </div>';
}
?>