<?php
session_start();
include("connection.php");
 $prd_id=$_SESSION['prd_id'];

 $select="select * from product where id='$prd_id'";
 $res=mysql_query($select);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$productname=$row['productname'];
   //echo $productname;
   $category=$row['category'];
   $brand=$row['brand'];
   $prise=$row['prise'];
   $units=$row['units'];
   $discription=$row['discription'];
 //echo  $date=$row['date'];
  $file_name=$row['pro_image_name'];
  $insert="insert into sellproducttable(prd_id,productname,category,brand,prise,units,discription,date,pro_image_name)
  values('$prd_id','$productname','$category','$brand','$prise','$units','$discription',now(),'$file_name')";
  mysql_query($insert);
  $delete="delete from product where id='$prd_id'";

  mysql_query($delete);
header("location:profile.php?msg=1");
}
else
{
	header("location:profile.php?msg=2");
	
	
}  
?>