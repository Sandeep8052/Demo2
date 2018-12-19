<?php
session_start();

if($_SESSION['email']== "")
{
    session_destroy();
	header("Location:index.php?msg=1");
}
//echo "welcome user";

//echo "<br/>";

//echo $_SESSION['email'];
?>
<html>
<head>
<link href="admin.css"type="text/css"rel="stylesheet">
</head>
<body>
<div id="field"><center>
<div id="field2"><font color="#007F66"><b><u>Admin Page</u></b></font>
</div></center>
<div id="field3">

<ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="adminprofile.php">HOME</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="ADDCATEGORY.php">ADD CATEGORY</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="addbrand.php">ADD BRAND</a></li>&nbsp;&nbsp;&nbsp;
<li><a href="Addproduct.php">ADD PRODUCT</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="adminlogout.php">LOGOUT</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
</ul>
</div>
<div id="field4"><center><br><br>
<a href="showproduct.php"><font size="6px"color="white"><b>Show Product</b></font></a><br><br><br>
<a href="costemerdetail.php"><font size="6px"color="white"><b>Custemer Detail</b></a></font><br><br><br>
<a href="showsellproduct.php"><font size="6px"color="white"><b>Sell Product</b></a></font><br><br><br>
<a href="complain.php"><font size="6px"color="white"><b>Complain</b></a></font><br><br><br>


</center></div>
</div>
</body>
</html>