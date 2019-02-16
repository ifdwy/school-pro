<?php  
	header("Content-Type: text/html; charset=utf-8");
	$userName=$_POST["userName"];
	$passWord=$_POST["passWord"];
	echo "您输入的用户名是".$userName;
	echo "<br>您输入的密码是".$passWord;

?> 

<?php 
	header("Content-Type: text/html; charset=utf-8");
	$conn=mysql_connect("localhost","root","");
	mysql_query("set names utf-8");
	mysql_select_db("test",$conn);

	$sql="insert into first(userName,passWord) values ('$userName','$passWord')";
	echo $sql;
	mysql_query($sql)or die("执行失败");

?>

