<?php
$id=$_REQUEST['id'];
 echo $id;
//include("dbconnect.php");
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="delete from contact where id='$id'";
mysql_query($query);
header("location:complain.php");
?>