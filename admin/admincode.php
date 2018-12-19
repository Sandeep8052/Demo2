<?php

session_start();
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from admin where gmail='$email' and password='$password'";
                  				 
								  
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	$_SESSION['email']=$email;
	
	header("Location:adminprofile.php");
}

else
{
	header("Location:index.php?msg=1");
}

?>