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
?>