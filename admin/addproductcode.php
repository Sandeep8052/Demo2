<?php

$productname=$_POST['productname'];
//echo $productname;

$category=$_POST['category'];
//echo $category;

$brand=$_POST['brand'];
//echo $brand;

$price=$_POST['price'];
//echo $prise;

$units=$_POST['units'];
//echo $units;

$Discription=$_POST['discription'];
//echo $Discription;

$file_name=$_FILES['file']['name'];
//echo $file_name;

$size=$_FILES['file']['size'];
//echo $size;

$type=$_FILES['file']['type'];
//echo $type;

$tmp_name=$_FILES['file']['tmp_name'];
//echo $tmp_name;

    $location="attach/";
    mysql_connect('localhost','root','');
	mysql_select_db("demo2");
    $query="insert into product(productname,category,brand,price,units,discription,date,pro_image_name)values
	('$productname','$category','$brand','$price','$units','$Discription',now(),'$file_name')";
	mysql_query($query);
	move_uploaded_file($tmp_name,$location.$file_name);
    header("location:addproduct.php");
	
?>