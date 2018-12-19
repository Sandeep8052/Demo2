<?php
session_start();		
		$email=$_SESSION['email'];
	//	include("connection.php");
		mysql_connect('localhost','root','');
        mysql_select_db("demo2");
		$query="select * from registration where email='$email'";
		$res=mysql_query($query);
		
		if($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
			$user_id=$row['id'];
		}
		$query2="select * from registration where id='$user_id'";
		$res=mysql_query($query2);
		if($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
?>
<html>
<head>
<link href="login.css"type="text/css"rel="stylesheet">
</head>
<body>
<form action="upcode.php"method="post">
<div id="update_outer">
<div id="update_menu"><br>
<a href="profile.php"><font size="6px" color="#007F66" ><i><b>Back to Profile page</b></i></font></a>

</div><center>
<div id="update_heder"><b><font color="#007F66">Update</b></font>
<div><br><br><br><br><br></center>
<center><div id="update_main">

<input type="hidden"name="id"value="<?php echo $row['id']; ?> "/><br/>

<input type="text" name="name" placeholder="Update Your Name" value="<?php echo $row['name']; ?>" 
style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>

<input type="date" name="dob"placeholder="Update Your Date Of Birth"value="<?php echo $row['dob']; ?>" 
style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>

<textarea name="address"placeholder="Update Your Address"
style="height:50px;width:350px;border-radius:5px;font-size:20px;"><?php echo $row['address'];?>
</textarea><br><br>

<select name="city"
style="height:50px; width:350px; border-radius:5px; font-size:20px;">
<option><?php echo $row['city'];?></option>
<option >Basti</option>
<option >Gonda</option>
<option >GKP</option>
</select><br><br>

<input type="pincode"name="pin" placeholder="Update Your Pincode"value="<?php echo $row['pin']; ?>" 
style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br/><br/>

<font size="6px">Gender&nbsp;&nbsp;&nbsp;&nbsp;</font>
<input type="radio"name="gender"value="male <?php if ($row['gender']=='male') {?> checked <?php } ?>"required/><font size="6px">Male</font>
<input type="radio"name="gender"value="female <?php if($row['gender']=='female'){?> checked <?php } ?>"required/><font size="6px">Female</font> <br><br>

<input type="text"name="mobile"placeholder="Update Your Mobile No"value="<?php echo $row['mobile']; ?>" 
style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>
<?php
		}
		?>
<input type="submit"value="Update"style="height:40px;width:140px;font-size:25px;border-radius:10px;">



<div></center>
</div>
</form>
</body>
</html>