<?php
error_reporting(0);
$prop_type=$_REQUEST['prop_type'];
 //echo $prop_type;
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$select="select * from product where category='$prop_type'" ;                         
$res=mysql_query($select); 


?>
<html>
<head>
<link href="index.css"type="text/css"rel="stylesheet">
<script src="slider.js">

</script>
</head>
<body onload="slider()">
<div id="outer">

<div id="header">
<div id="headerL"></div>
<div id="headerR">
<div id="header_R">
<font size="17px"style="color:white;"><h3><i><u>Computer Store</u></i></h3></font></div>
<div id="header_RR">
<marquee behavior="alternate">
<font size="6px"><i><b>Online Shopping</b></i></font></marquee>
</div>
</div>
<div id="menu">
<div id="menu2">
<ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="login.php"><b>Login</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="registration.php"><b>Registration</b></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
</ul>
</div>
<ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="index.php">HOME</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="about.php">ABOUT US</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<li><a href="contactus.php">CONTACT US</a></li>
</ul>

</div>

</div>

<div id="down">
<marquee behavior="alternate">
<font size="6px">Surya Computer's Naza Market Lucknow (U.P.)</font></marquee>
</div>


<div id="image">
<div id="imageR">
<img id="img1" height="400px" width="1335px"/>
</div>
</div>

<div id="footer">
<div id="footer1"><font size="5px" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24/7 Support </b></font><br>&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;Only For You&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
<div id="footer2"><font size="5px" ><b>&nbsp;&nbsp;SAVE AN EXTRA&nbsp;&nbsp;10%</b></font><br>&nbsp;&nbsp;&nbsp;When You Use Your&nbsp;&nbsp;&nbsp; CRADIT CARD
</div>
<div id="footer3"><font size="5px" ><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FREE&nbsp;&nbsp;&nbsp; SHIPPING</b></font>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On&nbsp; Order&nbsp;Over&nbsp; $90
</div>
</div>
<div id="Sside">
<div id="Lside">
<div id="LUside"><center><font color="black"size="5px">Category</font></center></div>
<div id="LDside"><center>
<marquee  scrollamount=3% direction="up" onmouseover="stop()" onmouseout="start()">
                 <font size="4px">
		<ul>
<li><a href="index_laptop.php?prop_type=laptop">  Laptop </a> </li><br/><br/>
<li><a href="index_desktop.php?prop_type=desktop"> Desktop</a> </li><br/><br/>
<li><a href="index_printer.php?prop_type=printer">Printer</a></br><br/>
<li><a href="index_keboard.php?prop_type=Keyboard"> Keyboard</a></li><br><br>
<li><a href="index_mouse.php?prop_type=mouse"> Mouse</a></li><br/><br/>
<li><a href=""> Batteries</a></li><br/><br/>
<li><a href="">CPU</a></li><br/><br/>
</ul>
              
				</font></marquee></center>
</div>
<div id="Dside">
<div id="DUside"><center><font color="black"size="5px">CHART</font></center></div>
<div id="DDside"><center>
<h3><b>Product Search</b></h3><br>
<form action="expertsearch.php"method="post">
<b>Product &nbsp;&nbsp;  Name</b><br><br>
<input type="text"name="txt1"style="height:27px;width:180px;border-radius:10px;"><br><br>
<b>Product &nbsp;&nbsp; Cost</b><br><br>
<input type="text"name="txt2"style="height:27px;width:180px;border-radius:10px;"><br><br>
<input type="submit"value="Search" style="border-radius:10px;background-color:black;color:white;height:35px;width:100px;font-size:25px;">
 </center>
 </form>
 </div>
</div>
</div>

<div class="Rside">
<?php 
	while($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
		?>
<div class="product">
<div class="image">

<img height="250px"width="360px" src="admin/attach/<?php echo $row['pro_image_name'];?>"/>
</div><center>
<div class="button">
<a href="login.php?prd_id=<?php echo $row[0];?>"><input type="button" value="add to cart"style="height:40px;width:120px;font-size:23px;border-radius:10px;background-color:gray;"/></a>
	
<a href="login.php?prd_id=<?php echo $row[0];?>"><input type="button" value="buy"style="height:40px;width:120px;font-size:23px;border-radius:10px;background-color:gray;"></a>
</div></center>
</div>
<?php	
  }
	?>
</div>
</div>
</body>
</html>