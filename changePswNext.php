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

$ss=$_SESSION['usrlog']; //email or user retrieve

$usr=$_POST['usr'];
$psw=$_POST['ps2'];

$sql="update userDetail set password='$psw' where email='$usr'";
$res=mysql_query($sql);

//view
$sql="select * from userDetail where email='$usr'";
$res=mysql_query($sql);
	
		$flag=0; $c=""; $d=""; $e="";

		while($row=mysql_fetch_array($res))
		{	
		 $c=$row['password'];
		 $d=$row['fullname'];
		 $e=$row['phone'];
		$flag=1;
		} //end of loop

	if($flag==1)
	{
	echo "<br><br>Password modified ";
	echo "<br><br> Full name $d ";
	echo "<br><br> New psw <u>$c</u>";
	echo "<a href='AdminHome
	}
	else
	echo "<br><br>error ";
?>


</div>

</div>