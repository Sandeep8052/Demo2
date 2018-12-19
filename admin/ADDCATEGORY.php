<?php
include("dbconnect.php");
	$query="select *from category";
	$cat=mysql_query($query);
?>
<html>
<head>
<style>
#addbrand
{
	height:350px;
	width:500px;
	border:1px solid auto;
	background-image:url('background-image.jpg');
    background-size:cover;
	border-radius:50px;
}
</style>
</head>
<body>
<?php include("adminprofile.php");?>
<form action="addcategorycode.php"method="post">
<center><div class="showuser"><br><br><font size="50px" color="#007F66">ADD CATEGORY</font>
<div id="addbrand"><br><br><br>
<select style="height:50px;width:350px;border-radius:5px;font-size:20px;">
<option>SHOW  CATEGORY</option>
<?php
					while($cat_list=mysql_fetch_array($cat,MYSQL_BOTH))
				{
				?>
					<option>
						<?php echo $cat_list[1]; ?>
					</option>
				
				<?php } ?>
</select><br><br><br>
<input type="text"name="addcategory"placeholder="Enter Your New Category Name"style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br><br>
<input type="submit" value="Add Brand" style="height:50px;width:150px;border:none;outline:none;color:white;font-size:18px;background-color:brown"/>
</div>
</div></center>
</form>
</body>
</html>