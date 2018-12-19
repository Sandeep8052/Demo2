<?php
error_reporting(0);
$msg=0;
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
	//echo "inavalid username or password";
}

if($msg==2)
{
	//echo "logout successfully";
}


	if($msg==3)
	{
	//echo "Ypu must have to login first!";
    }
?>
<html>
<head>
<link href="admin.css"type="text/css"rel="stylesheet">
</head>
<body>
<form action="admincode.php"method="post">
<div id="admin"><a href="../index.php"><font size="6px" color="#007F66" ><i><b>Back to index page</b></i></font></a><br><br><br><br><br><br><br><br><center>
<div id="admin1">
<div id="admin2"><font style="font-style:;"><b>Admin Login</b></font></div>
<div id="admin3"><br><br>
<input type="email"name="email"placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Email or Username"style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br/><br/>

<input type="password"name="password"placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Your Password"style="height:50px;width:350px;border-radius:5px;font-size:20px;">
</div>
<div id="admin4"><br>
<center><div id="admin5">
<input type="submit"value="Login"style="height:45px;width:120px;border-radius:10px;font-size:20px;">
</div>
</div></center>
</div></center>
</div>
</form>
</body>
</html>