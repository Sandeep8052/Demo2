<?php
session_start();
$answer=$_POST['ans'];

//echo $answer;
$ques_id=$_POST['ques_id'];
//echo $ques_id;

$email= $_SESSION['email'];
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from registration where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	
	$user_id= $row['ans_id'];
}

$query2="insert into answer(ques_id,answer,ans_id,date)values('$ques_id','$answer','$user_id',now()) ";
mysql_query($query2);
header("location:discuss.php")
?>
