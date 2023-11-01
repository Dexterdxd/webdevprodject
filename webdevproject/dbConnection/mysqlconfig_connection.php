<?php 
  DEFINE('DB_User', 'root');
  DEFINE('DB_Password','');
  DEFINE('DB_Host','localhost');
  DEFINE('DB_Name','dbschedule');

  $dbc = @mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name)
  or die('Could not connect to MySQL: '. mysqli_connect_error());
?>
