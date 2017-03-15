<?php  require_once 'login.php';  
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
  mysql_select_db($db_database)    or die("Unable to select database: " . mysql_error());
  $isbn=$_GET['isbn'];
  $query  = "DELETE FROM users WHERE isbn=$isbn";  
  $result = mysql_query($query);
  if (!$result) die ("Database access failed: " . mysql_error()); 
  ?>
  <html>
	<head>
	<style>
	#div2{
		margin-left:500px;
		margin-top:250px;
		
	}
	#div1{
		margin-left:500px;
		margin-top:250px;
	}
	</style>
	</head>
	<body onload="func1()">
	<div id="div2">
	<h1>
	Deletion going on.Please wait....
	</h1>
	</div>
	<div id="div1" style="display:none;">
	<h1>
	Deletion complete.
	</h1>
	</div>
	</body>
	<script>
	function func1(){
		setTimeout(showpage,5000);
	}
	function showpage(){
	document.getElementById("div2").style.display = "none";
	document.getElementById("div1").style.display = "block";
	}
	</script>
	</html>