<?php

$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="delete from sellproducttable where id='$id'";
mysql_query($query);
header("location:showsellproduct.php");
?>
