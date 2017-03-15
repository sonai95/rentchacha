<html>
<head>
<style>
#form{
	margin-left:500px;
	margin-top:200px;
		}
#form>#a{
	margin-left:20px;
}
#form>#b{
	margin-left:27px;
	margin-top:10px;
}
	#form>#c{
		margin-left:44px;
	margin-top:10px;
	}
		#form>#d{
			margin-left:100px;
			margin-top:-46px;
		}
		#zjong{
			height:0px;
			width:0px;
		}
		h4{
			color:white;
		}
		#underinput{
			color:yellow;
			
		}
</style>
<script type="text/javascript" src="foodstore.js"></script>
</head>
<body onload="process()">
<div id="zjong">
<img style="height:650px;width:1350px;" src="16997784_1242865939167196_8018393581072783672_n.jpg">
</div>
<form id="form" method="get" action="auth3.php">
<h4>ISBN:</h4><input id="drone" autofocus name="isbn" style="font-size:15px;width:200px;height:30px;border-radius:7px;" type="text" required><br/><br/>
<div id='underinput'></div>
<button id="button" style="cursor:pointer;color:white;background:blue;border-radius:5px;height:35px;width:70px;">Submit</button>
</form>
</body>
</html>