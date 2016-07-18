 <?php
  include("config.php");  
  /* Подключение к серверу MySQL */ 
  $idb = mysqli_connect(
              $dbhost,
              $dbusername,
              $dbpass,
              $dbname);
  $username="";
  if (!$idb) { 
	     printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
	     exit; 
 	}
	session_start();
  if (isset($_POST['login'])) {
    $_SESSION['login'] = $_POST['login'];
  }
  if(isset($_POST['logout'])){
    session_destroy();
    header( 'Location: index.php', true, 301 );
    exit;
  }
  if(isset($_POST["comment"])){
     
     $isql = mysqli_query($idb, "INSERT INTO `comments` (text, deep) VALUES ('" . $_POST['comment'] . "', 0)");
     $isql = mysqli_query($idb, "SELECT LAST_INSERT_ID() FROM `comments`");
     $count = $isql->fetch_row();
     $isql = mysqli_query($idb, "INSERT INTO `newscomments` (news_id, comment_id) VALUES ('" . $_POST['commented'] . "', '" . $count[0] . "')");
     echo mysqli_error($idb);
  }
?>