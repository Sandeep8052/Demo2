<?php
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from registration";
$res=mysql_query($query);

?>
<html>
<head>
<link href="admin.ss"type="text/css"rel="stylesheet">
</head>
<body>
<?php include("adminprofile.php");?>
<center><div class="showuser">
<table align="center"border="1px"style="font-size:23px;">
<font color="blue"size="10px"><b>Custemer Detail Table</b></font><hr/>
<tr>
<td>Id</td>
<td>Name</td>
<td>DOB</td>
<td>Address</td>
<td>City</td>
<td>Pin</td>
<td>Gender</td>
<td>Mobile</td>
<td>Email</td>
<td>Password</td>
<td>Status</td>
<td>Delete</td>
<tr/>
<?php
  $i=1;
  while($row=mysql_fetch_array($res,MYSQL_BOTH))
  {
  ?>
  <tr>
  <td><?php echo $i;?></td>
  <td><?php echo $row['name'];?></td>
  <td><?php echo $row['dob'];?></td>
  <td><?php echo $row['address'];?></td>
  <td><?php echo $row['city'];?></td>
  <td><?php echo $row['pin'];?></td>
  <td><?php echo $row['gender'];?></td>
  <td><?php echo $row['mobile'];?></td>
  <td><?php echo $row['email'];?></td>
  <td><?php echo $row['password'];?></td>
  <td><a href="status.php?id=<?php echo $row['id'];?>"><?php echo $row['status'];?></a></td>
  <td><a href="costemerdelete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</div></center>
</body>
</html>