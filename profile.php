<?php
session_start();
//include("connection.php");
mysql_connect('localhost','root','');
mysql_select_db("demo2");
if($_SESSION['email']== "")
{
    session_destroy();
	header("Location:login.php?msg=3");
}
//echo "welcome user";

//echo "<br/>";
//echo $_SESSION['email'];
$s=$_SESSION['prd_id'];
//echo $s;
$query="select *from product where id='$s'";
$res=mysql_query($query);	
?>
<html>
<head>
<style>
		.main
		{
			height:450px;
			width:400px;
			border:1px solid black;
			background-color:white;
			margin:0px auto;
			margin-top:0px;
		}
		.main1
		{
			height:450px;
			width:400px;
			border:1px solid black;
			background-color:white;
			margin:0px auto;
			margin-top:0px;
		}
		.productimage
		{
			height:300;
			width:400;
			border:1px solid white;
		}
		.main2
		{
			height:100px;
			width:400px;
			border:1px auto;
		}
</style>
<link href="login.css"type="text/css"rel="stylesheet">
</head>
<body>

<div id="field">
<div id="field2"><center> <a href="./index.php"><font color="#007F66" size="5px;">Back To Home Page</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="#007F66"style="margin-left:-250px;"><b><u>Profile Page</u></b></font>

</div></center>
<div id="field3">

<ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="profile.php">HOME</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="update.php">UPDATE</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="changepass.php">CHANGE PASSWORD</a></li>&nbsp;&nbsp;&nbsp;
<li><a href="logout.php">LOGOUT</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="discuss.php">DISCUSSION BOARD</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
</ul>
</div>
<?php
		while($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
		?>
		<div class="main">
		<div class="productimage">	
		<img src="admin/attach/<?php echo $row[8];?>" height="300px" width="400px;"/><br>
		</div>
	<div class="main2">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5px"><b>Name:</b><?php echo $row[1];?></font><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5px"><b>Prise:</b><?php echo $row['price']; ?></font><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="5px"><b>Discription:</b><?php echo $row['discription']; ?></font><br></div>
		<center><a href="sellproduct.php?prd_id=<?php echo $row[0];?>"><input type="button" value="buy"style="height:40px;width:120px;font-size:23px;border-radius:10px;background-color:gray;"></a>
		</center></div>
<?php
		}
?>
</div>
</body>
</html>