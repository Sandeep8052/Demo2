<?php
session_start();
$email=$_SESSION['email'];
//echo $email;
//die();
mysql_connect('localhost','root','');
mysql_select_db("demo2");
//include("connection.php");
$select="select * from registration where email='$email'";
$res=mysql_query($select);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$pass=$row['password'];
//	echo $pass;
}

?>
<html>
<head>
<link href="login.css"type="text/css"rel="stylesheet">
</head>
<body>
<form action="changepasscode.php"method="post">
<div id="change">
<div id="change1"><br>
<a href="profile.php"><font size="6px" color="#007F66" ><i><b>Back to profile page</b></i></font></a>
</div><center>
<div id="change2"><font color="#007F66">
<b>Change Your Password</b></font>
</div>
<div id="change3"><br><br>
<input type="hidden"name="pass" value="<?php echo $pass?>">

<input type="password"name="opassword"
placeholder="&nbsp;&nbsp;Type Your Old Password"style="height:50px;width:350px;border-radius:5px;font-size:20px;">
<br><br><br>
<input type="password"name="npassword"
placeholder="&nbsp;&nbsp;Type Your New Password"style="height:50px;width:350px;border-radius:5px;font-size:20px;">
<br><br><br>
<input type="password"name="cfpassword"
placeholder="&nbsp;&nbsp;Confirm Your New Password"style="height:50px;width:350px;border-radius:5px;font-size:20px;">
<br><br><br>
<input type="Submit"value="Submit"style="height:45px; width:130px;font-size:35px;border-radius:10px;">
</div></center>
</div>
</form>
</body>
</html>