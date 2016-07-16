<?php
function setHeader($isExitButton){
	echo '<nav class="navbar navbar-default">
			<div class="container-fluid">
			  <div class="navbar-header">
			    <a class="navbar-brand" href="#">Breaking news</a>
			  </div>
			  ';
		  if($isExitButton)
  	echo '<form class="navbar-form navbar-left" method="POST">
	          <input class="form-control" type="hidden" name="logout">
	        <button type="submit" class="btn btn-default">Exit</button>
	      </form>';
  	echo '	</div>
		  </nav>';
}
?>