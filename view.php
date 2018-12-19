<?php
$ques_id=$_REQUEST['ques_id'];
 //echo $ques_id;
 mysql_connect('localhost','root','');
mysql_select_db("demo2");
$query="select * from answer where ques_id='$ques_id'";
$res=mysql_query($query);
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{	
?>
<html>
<body>
<table  border="10px" align="center">
<tr>
<td ><b>Answer:</b></td>
<td>
<?php    echo $row['answer'];
	echo "<br/>";
	?>
	</td></tr>
</table>	
</body>	
</html>
<?php
}
?>

<?php


?>