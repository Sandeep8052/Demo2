<?php
    $category=$_POST['addcategory'];
	include("dbconnect.php");
	$query="insert into category(category,date)values('$category',now())";
	mysql_query($query);
    header("location:ADDCATEGORY.php");
?>