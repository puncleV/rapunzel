<?php
function printComment($id, $text, $comments){
	echo '<div class="panel panel-default">
					  <div class="panel-body">
					    ' . $text . '
					  </div>
					</div>';
}
function setTree($id, $comments){
	if(count($comments) == 0){
		$placeholder = "U will be first";
	}else{
		$placeholder = "Comment";
		foreach ($comments as $comment) {
			printComment($comment[0], $comment[1]);
		}
	}
	echo '<form method="POST">
			<input type="hidden" name="commented" value="' . $id . '">
			<textarea class="form-control" rows="3" placeholder="' . $placeholder . '" name="comment"></textarea>
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Send</button>
			    </div>
		  	</div>
		</form>';

}
?>