
	<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$gender=$_POST['gen'];
	$dob=$_POST['dob'];
	$conn=mysql_connect("localhost","root","");
	$db=mysql_select_db("proj");
	$sql="insert into userlist values('$name','$email','$password','$gender','$dob')";
	$res=mysql_query($sql);
	if($res){
		include "wronglogin.html";
	}
?>