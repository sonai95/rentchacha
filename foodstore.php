<?php
header('Content-Type:text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
echo '<response>';
require_once 'login.php';  
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
  mysql_select_db($db_database)    or die("Unable to select database: " . mysql_error());
  $query  = "SELECT * FROM users";
  $result = mysql_query($query);
  if (!$result) die ("Database access failed: " . mysql_error());
  $rows = mysql_num_rows($result);
  $food=$_GET['food'];
  $z=0;
  for ($j = 0 ; $j < $rows ; ++$j)  
  {
if($food==mysql_result($result,$j,'isbn')) {
		echo 'Yes '.$food.' is present';
		$z=0;
		break;
	}
	else
			  $z=1;
		echo '';
	  }
	  if($z==1){
		echo 'No such book present';  
	  }
echo '</response>';
?>
