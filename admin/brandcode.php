<?php

    $brand=$_POST['bname'];
	//echo $bname;
	include("dbconnect.php");
	
	$query="insert into brand(brand,date)values('$brand',now())";
	mysql_query($query);
	
    header("location:addbrand.php");
?>