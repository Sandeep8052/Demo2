<?php
session_start();
$question=$_POST['ques'];
//echo $question;

$email= $_SESSION['email'];
//echo $email;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from registration where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	$user_id= $row['ques_id'];
}

$query2="insert into question(question,ques_id,date) values('$question','$user_id',now())";
mysql_query($query2);
header("Location:discuss.php");

?>


