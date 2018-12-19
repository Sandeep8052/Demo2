<?php
error_reporting(0);
$prd_id=$_REQUEST['prd_id'];
$msg=$_REQUEST['msg'];
//echo $msg;
if($msg==1)
{
//	echo "inavalid username or password";
}

if($msg==2)
{
//	echo "logout successfully";
}


	if($msg==3)
	{
//	echo " login karo ";
    }

?>
<html>
<head>
<link href="login.css"type="text/css"rel="stylesheet">
<script>
function f2()
{

var v1=f1.email.value;
var v2=f1.password.value;

if(v1=="")
{
alert("Enter your email");

}
else if(v2==""){
alert("Enter your password");
}

else{
//alert("All Values Filled Up");
f1.submit();
}

}

</script>
</head>
<body>
<form name="f1" action="logcode.php?prd_id=<?php echo $prd_id; ?>" method="post">
<div id="outer"height="100%"width="100%"><a href="index.php"><font size="6px" color="#007F66" ><i><b>Back to home page</b></i></font></a>
<center><br/><br/><br/><br/><br/>
<div id="outer2">
<div id="header"><b>Login Page</b></div>
<div id="main">
<div id="main1"><br/><br/><br/>
<input type="email"name="email"placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email or Username"style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br/><br/>

<input type="password"name="password"placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password"style="height:50px;width:350px;border-radius:5px;font-size:20px;"></div>
<div id="main2">
<div id="main21"><input type="checkbox"name="chk">&nbsp;&nbsp;<b>Remember me</b></div>
<div id="main22"><input type="submit"value="Login" onClick="f2();" style="height:40px;width:150px;font-size:27px;
border-radius:20%;margin-top:25px;margin-left:-60px;"></div>
</div>
</div>
<div id="footer">
<ul><br>
<li><a href="changepassword.php"><font style="margin-left:-130px;"><b>Forgot password?</b></font></a></li>&nbsp;
<li><a href="registration.php"><b>Sign Up</b></a></li>
</ul>
</div>
</div></center>
</div>
</form>
</body>
</html>
