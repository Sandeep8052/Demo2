<?php
$id=$_REQUEST['id'];
//echo $id;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$select="select * from registration where id='$id'";
$res=mysql_query($select);
if($row=mysql_fetch_array($res,MYSQL_BOTH));
{
	$s=$row['status'];
	//echo $s;
}
if($s==N)
{
$update="update registration set status='Y' where id='$id'";
mysql_query($update);
header("Location:profile.php");
}
if($s=='Y')
{
	$update="update registration set status='N' where id='$id'";
	mysql_query($update);
}
header("location:costemerdetail.php");
?>