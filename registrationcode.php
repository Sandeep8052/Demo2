<?php
$name=$_POST['name'];
//echo $name;
$dob=$_POST['dob'];
//echo $dob;
$address=$_POST['address'];
//echo $address;
$city=$_POST['city'];
//echo $city;
$pin=$_POST['pin'];
//echo $pin;
$gender=$_POST['gender'];
//echo $gender;
$mobile=$_POST['mobile'];
//echo $mobile;
$email=$_POST['email'];
//echo $email;
$password=$_POST['password'];
//echo $password;

//$cpassword=$_POST['cpassword'];
//echo $cpassword;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="insert into registration(name,dob,address,city,pin,gender,mobile,email,password,status)
values('$name','$dob','$address','$city','$pin','$gender','$mobile','$email','$password','N')";
mysql_query($query);
header("location:index.php");
?>