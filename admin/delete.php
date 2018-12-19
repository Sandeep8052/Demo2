<?php
$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="delete from product where id='$id'";
mysql_query($query);
header("location:showproduct.php");

?>