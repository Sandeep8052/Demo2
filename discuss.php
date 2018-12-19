<?php
mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from question";
$res=mysql_query($query);

?>
<html>
<head>
<link href="login.css"type="text/css"rel="stylesheet">
</head>
<body>

<form action="ques.php"method="post">
<div id="discuss">
<div id="discuss1">
<a href="profile.php"><font size="6px" color="#007F66" ><i><b>Back to profile page</b></i></font></a>
</div>
<center><div id="discuss0">
<u><i><b><font color="#007F66">Discussion Board</font></b></i></u>
</div></center>
<div id="discuss2">
<center>
<font size="20px"><b>Add Question:</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<textarea name="ques"style="height:90px;width:450px;">
</textarea><br>
<input type="submit"value="post"style="height:30px;width:100px"/></center>
</div>

</form>
<table border="2px" align="center">
<tr>
<td>S.N.</td>
<td>Question</td>
<td>Post</td>
<td>View Answer</td>
</tr>

<?php
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	?>
	<tr>
	<td> <?php echo $row['ques_id'];?></td>
	<td> <?php echo $row['question'];?></td>
	<td><a href="post.php?ques_id=<?php echo $row['ques_id'];?>">Post Answer</a></td>
	<td><a href="view.php?ques_id=<?php echo $row['ques_id']; ?>">View Answer</a></td>
	
	
	</tr>
	<?php
}
?>
</table>
</div>
</body>
</html>












