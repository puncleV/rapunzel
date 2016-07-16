 <?php
  include("config.php");  
  /* Подключение к серверу MySQL */ 
  $idb = mysqli_connect(
              $dbhost,
              $dbusername,
              $dbpass,
              $dbname);

  if (!$idb) { 
	     printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
	     exit; 
 	}
	session_start();
?>