<?php
error_reporting(0);
$prop_type=$_REQUEST['prop_type'];
 //echo $prop_type;
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
<font size="6px">Sandeep Computer's Naza Market Lucknow (U.P.)</font></marquee>
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

<div id="up">
<div id="up1"><center><font color="black"size="5px">Category</font></center>
</div>
<div id="up2"><center><font color="black"size="5px">Apple Lp</font></center>
</div>
<div id="up3"><center><font color="black"size="5px">Dell Lp</font></center>
</div>
<div id="up4"><center><font color="black"size="5px">hp Lp</font></center>
</div>
</div>

<div id="slide">

<div id="slide1"><CENTER>

<marquee  scrollamount=3% direction="up" onmouseover="stop()" onmouseout="start()">
 <font size="4px">
		<ul>
<li><a href="index_laptop.php?prop_type=laptop">Laptop </a> </li><br/><br/>
<li><a href="index_desktop.php?prop_type=desktop"> Desktop</a> </li><br/><br/>
<li><a href="index_printer.php?prop_type=printer"> Printer</a></br><br/>
<li><a href="index_keboard.php?prop_type=Keyboard"> Keyboard</a></li><br><br>
<li><a href="index_mouse.php?prop_type=mouse"> Mouse</a></li><br/><br/>
<li><a href=""> Batteries</a></li><br/><br/>
<li><a href="">CPU</a></li><br/><br/>
</ul>
              
</font></marquee>
</CENTER>
</div>

<div id="slide2">

<div id="appleleptop">
<center><div id="rappleleptop"></div></center>
<div id="prise2"><center><font size="4px"color="black"><br>Prise $ 2000</font><br>
<!--<a href="index_printer.php?prop_type=printer""><button style="border-radius:10px;background-color:black;color:white;"><font size="5px">add to cart</font></button></a> -->
<button style="border-radius:10px;background-color:black;color:white;"><font size="5px">add to cart</font></button>
<button style="border-radius:10px;background-color:red;color:white;"><font size="5px">buy now</font></button></center>
</div>
</div>

<div id="dellleptop">
<center><div id="rdellleptop"></div></center>

<div id="prise2"><center><font size="4px"color="black"><br>Prise $ 2000</font><br>

<button style="border-radius:10px;background-color:black;color:white;"><font size="5px">add to cart</font></button>
<button style="border-radius:10px;background-color:red;color:white;"><font size="5px">buy now</font></button></center>
</div></div>

<div id="hpleptop">
<center><div id="rhpleptop"></div></center>

<div id="prise3"><center><font size="4px"color="black"><br>Prise $ 3000</font><br>
<button style="border-radius:10px;background-color:black;color:white;"><font size="5px">add to cart</font></button>
<button style="border-radius:10px;background-color:red;color:white;"><font size="5px">buy now</button>
</center>
</div></div>

</div>
</div>

<div id="up11">
<div id="up12"><center><font color="black"size="5px">CART</font></center>
</div>
<div id="up13"><center><font color="black"size="5px">SAMSUNG</font></center>
</div>
<div id="up14"><center><font color="black"size="5px">Accesr</font></center>
</div>
<div id="up15"><center><font color="black"size="5px">Apple pc</font></center>
</div>
</div>

<div id="slide11">
<div id="slide12"><center>
<h3><b>Product Search</b></h3><br>
<form action="expertsearch.php"method="post">
<b>Product &nbsp;&nbsp; Brand</b><br>
<input type="text"name="brand_name"style="height:27px;width:180px;border-radius:10px;"><br>
<b>Product &nbsp;&nbsp; Cost</b><br>
<input type="text"name="price"style="height:27px;width:180px;border-radius:10px;"><br><br>
<input type="submit"value="Search" style="border-radius:10px;background-color:black;color:white;height:35px;width:100px;font-size:25px;">
 </center>
 </form>
 </div>

 <div id="slide13">

<div id="appledesktop">
<center><div id="rappledesktop"></div></center>
<div id="prise11"><center><font size="4px"color="black"><br>Prise $ 500</font><br/>
<button style="border-radius:10px;background-color:black;color:white;"><font size="5px">add to cart</font></button>
<button style="border-radius:10px;background-color:red;color:white;"><font size="5px">buy now</font></button></center>
</div></div>


<div id="delldesktop">
<center><div id="rdelldesktop"></div></center>
<div id="prise12"><center><font size="4px"color="black"><br>Prise $ 200</font></br>
<button style="border-radius:10px;background-color:black;color:white;"><font size="5px">add to cart</font></button>
<button style="border-radius:10px;background-color:red;color:white;"><font size="5px">buy now</font></button></center>
</div></div>

<div id="hpdesktop">
<center><div id="rhpdesktop"></div></center>
<div id="prise13"><center><font size="4px"color="black">Prise $ 300</font></br>
<button style="border-radius:10px;background-color:black;color:white"><font size="5px">add to cart</font></button>
<button style="border-radius:10px; background-color:red;color:white"><font size="5px">buy now</font></button></center>
</div></div>
</div>
</div>
<br/><br/><br/><br/><br/>
<div id="dfooter"><font style="margin-top:-50px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b> Copyright 2018 Sandeep Computer Laptop Repairs Enfield 020 8367 9817 M: 08052 510986</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;

</div>

</div>

</body>
<html>