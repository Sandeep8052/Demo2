<?php
	include("dbconnect.php");
	$query1="select *from brand";
	$brand=mysql_query($query1);

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
<form action="brandcode.php"method="post">
<center><div class="showuser"><br><br><font size="50px" color="#007F66">ADD Brand</font>
<div id="addbrand"><br><br><br>
<select style="height:50px;width:350px;border-radius:5px;font-size:20px;">
<option>Show Brand</option>
<?php
				while($brand_list=mysql_fetch_array($brand,MYSQL_BOTH))
				{
				?>
					<option>
						<?php echo $brand_list[1]; ?>
					</option>
				
				
				<?php } ?>
</select><br><br><br>
<input type="text"name="bname"placeholder="Enter Your New Brand Name"style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br><br>
<input type="submit" value="Add Brand" style="height:50px;width:150px;border:none;outline:none;color:white;font-size:18px;background-color:brown"/>
</div>
</div></center>
</form>
</body>
</html>