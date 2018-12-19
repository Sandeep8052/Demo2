<?php
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from product";
$res=mysql_query($query);   
	
?>
<html>
<head>
<link href="admin.css" type="text/css"rel="stylesheet">
</head>
<body>
<?php include("adminprofile.php");?>
<center><div class="showuser1">

<table align="center"border="1px"style="font-size:20px;">
               <center><font size="10px"color="blue"><b>View All Product</b></font> </center><hr/>
				<tr>
                <th>ID</th>
				<th>NAME</th>
				<th>CATEGORY</th>
				<th>BRAND</th>
				<th>PRICE</th>
				<th>UNITS</th>
				<th>DISCRIPTION</th>
				<th>UPLOAD DATE</th>
				<th>IMAGE PRODUCT</th>
				<th>DELETE</th>
				</tr>
<?php
$i=1;
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>				
	
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['productname'];?></td>
<td><?php echo $row['category'];?></td>
<td><?php echo $row['brand'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['units'];?></td>
<td><?php echo $row['discription'];?></td>
<td><?php echo $row['date'];?></td>
<td><img width="170" height="50" src="attach/<?php echo $row['pro_image_name'];?>"/></td>
<td> <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
<?php
$i++;
}
?>
</tr>
</table>
</div></center>
</body>
</html>