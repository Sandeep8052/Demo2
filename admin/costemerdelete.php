<?php

$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="delete from registration where id='$id'";
mysql_query($query);
header("location:costemerdetail.php");
?>
