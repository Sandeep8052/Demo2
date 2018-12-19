<html>
<head>
<link href="registration.css"style="text/css"rel="stylesheet">
<script>


</script>
</head>
<body>
<form action="registrationcode.php" method="post">
<div id="outer1"><a href="index.php"><font size="6px" color="#007F66" ><i><b>Back to home page</b></i></font></a>
<center><div id="outer2"><b>Registration Page</b></div>
<div id="outer3"><br>
<input type="text" name="name" placeholder="Enter Your Name" style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>
<input type="date" name="dob"placeholder="Enter Your Date Of Birth"style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>
<textarea name="address"placeholder="Enter Your Address"style="height:50px;width:350px;border-radius:5px;font-size:20px;">
</textarea><br><br>
<select name="city"style="height:50px; width:350px; border-radius:5px; font-size:20px;">
<option value="">---Select your city--</option>
<option >Basti</option>
<option >Gonda</option>
<option >GKP</option>
</select><br><br>
<input type="pincode"name="pin" placeholder="Enter Your Pincode"style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br/><br/>
<font size="6px">Gender&nbsp;&nbsp;&nbsp;&nbsp;</font>
<input type="radio"name="gender"value="male"required/><font size="6px">Male</font>
<input type="radio"name="gender"value="female"required/><font size="6px">Female</font> <br><br>
<input type="text"name="mobile"placeholder="Enter Your Mobile No"style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br><br>
<input type="email"name="email"placeholder="Enter your Email"style="height:50px;width:350px;border-radius:5px;font-size:20px;"required/><br><br>
<input type="password"name="password" placeholder="Enter Your Password"style="height:50px;width:350px;border-radius:5px;font-size:20px;"><br/><br/>

<input type="password"name="cpassword" placeholder="Enter Your Conform Password"style="height:50px;width:350px;border-radius:5px;font-size:20px;">
<br><input type="checkbox"id="ChechBox" ><b>Agree</b>
<input type="submit" value="submit"style="height:40px;width:150px;font-size:27px;
border-radius:20%;margin-top:20px;margin-left:130px;background-color:white;">

</div></center>
</div>
</form>
</body>
</html>