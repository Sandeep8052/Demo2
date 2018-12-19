<?php
$id=$_POST['id'];
//echo $id;

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

mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="update registration set name='$name',dob='$dob', address='$address',city='$city',pin='$pin',gender='$gender',mobile='$mobile' where id='$id'";
mysql_query($query);
header("Location:profile.php");
?>


