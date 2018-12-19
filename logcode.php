<?php

session_start();
$prd_id=$_REQUEST['prd_id'];
//echo $prd_id;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from registration where email='$email' and password='$password' and status='Y'";
                  				 
								  
$res=mysql_query($query);

if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	$_SESSION['email']=$email;
	$_SESSION['prd_id']=$prd_id;  //session variable
	
	header("Location:profile.php");
}

else
{
	header("Location:login.php?msg=1");
}
?>