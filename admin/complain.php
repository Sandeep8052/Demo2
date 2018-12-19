<?php
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from contact";
$res=mysql_query("$query");
?>
<html>
<head>
<link href="admin.ss"type="text/css"rel="stylesheet">
</head>
<body>
<?php include("adminprofile.php");?>
<center><div class="showuser">
<table align="center" border="2px"style="font-size:20px">
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Mobile</td>
<td>Message</td>
<td>Delete</td>
</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['message'];?></td>
<td><a href="complaindelete.php?id=<?php echo $row['id'];?>">Delete</a></td>
<?php
$i++;
}
?>
</tr>
</table>
</div>
</body>
</html>
