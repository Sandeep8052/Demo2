<?php
$name=$_POST['name'];
//echo $name;
$email=$_POST['email'];
//echo $email;
$mobile=$_POST['mobile'];
//echo $mobile;
$message=$_POST['message'];
//echo $message;
 include("connection.php");  
$insert="insert into contact(name,email,mobile,message)values('$name','$email','$mobile','$message')";
mysql_query($insert);
/*SMS API INTEGRATION */

?>