<?php
	include("dbconnect.php");
	$query="select *from category";
	$cat=mysql_query($query);
	$query1="select *from brand";
	$brand=mysql_query($query1);

?>
<html>
<head>
</head>
<body>

<?php include("adminprofile.php");?>


<form action="addproductcode.php" method="post"enctype="multipart/form-data">
<center><div class="showuser">
<font size="50px"color="#007F66"><b><u>Add New Product</u></b></font>
<br><br>
<input type="text"name="productname"placeholder="Enter Your Product name" style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br>
<br><select name="category" style="height:50px;width:350px;border-radius:5px;font-size:20px;">
<option value="">Show Category</option>
<?php
				while($cat_list=mysql_fetch_array($cat,MYSQL_BOTH))
				{
				?>
					<option>
						<?php echo $cat_list[1]; ?>
					</option>
				
				<?php } ?>
</select><br>
<br><select name="brand" style="height:50px;width:350px;border-radius:5px;font-size:20px;">
<option>Show Brand</option>
<?php
				while($brand_list=mysql_fetch_array($brand,MYSQL_BOTH))
				{
				?>
					<option>
						<?php echo $brand_list[1]; ?>
					</option>
				
				<?php } ?>
</select><br><br>
<input type="text"name="price"placeholder="Enter Your Product Price" style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>
<input type="text"name="units"placeholder="Enter Your Product Units" style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>
<input type="text"name="discription"placeholder="Enter Your Product Discription" style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>
<input type="file"name="file" style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>
<input type="submit" value="Add Product" style="height:60px;width:200px;outline:none;color:white;font-size:18px;background-color:brown;boder-radius:20px;"/>
</div></center>
</form>
</body>
</html>