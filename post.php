<?php
$ques_id=$_REQUEST['ques_id'];
//echo $ques_id;
?>
<html>
<head>
</head>
<body>
<center>
<form action="ans.php"method="post">
<input type="hidden"name="ques_id"value="<?php echo $ques_id; ?>"/>
Post Answer<textarea name="ans"></textarea></br>

<input type="submit"value="post"/>
</form>
</center>
</body>
</html>



