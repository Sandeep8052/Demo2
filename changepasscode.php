<?php
session_start();
$email=$_SESSION['email'];
//echo $email;
$pass=$_POST['pass'];
//echo $pass;
$opassword=$_POST['opassword'];
//echo $opassword;
$npassword=$_POST['npassword'];
//echo $npassword;
$cfpassword=$_POST['cfpassword'];
//echo $cfpassword;
if($pass==$opassword)
{	
	if($npassword==$cfpassword)
	{
//	include("connection.php");
	mysql_connect('localhost','root','');
    mysql_select_db("demo2");
	$update="update registration set password ='$cfpassword' where email='$email'";
	mysql_query($update);
	header("location:logout.php");
	}
	else
	{
		header("location:changepass.php");
	}
}
	else
	{
		header("location:changepass.php");
	}

?>