<?php
session_start();
?>
<html>
<style>
#container{ width:800px;height:500px; 
border:1px solid #ccc;
}
#banner{ background:#CCC;
height:100px;color:navy;font-size:40px;
}

#row2{ border:1px dotted blue;
height:50px;
}
th	{padding:30px 10px 5px;color:red;}
td	{padding:8px; }

#logger	{
	float:right;
	padding-right:80px;
	font-size:12px;
	color:green;
	}
a	{
	text-decoration:none;
	font-size:13px;
	color:green;
	}
a:hover	{
	text-decoration:underline;
	font-size:16px;
	color:red;
	}
	
</style>

<body>
<center>
<div id="container">
<div id="banner"> EMS </div>
<div id="row2"> 
	<div id="logger">
	<?php
	echo "<br> ".$_SESSION['usrlog'];
	
	echo " &nbsp; <a href='signout.php'>signout</a>";	
	?>
	</div>
 </div>
<div id="main">

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("abcd");

?>

<table>
<tr> <td> Admin Home </td> </tr>
<tr> <td> <a href='AddStudent.php'> Add Student</a></td></tr>
<tr> <td> <a href='Search.php'> Search Student</a></td></tr>
<tr> <td> <a href='ModifyStudent.php'> Modify Student</a></td></tr>
<tr> <td> <a href='changePsw.php'> Change Password</a></td></tr>
</table>
</div>

</div>