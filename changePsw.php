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

$sql="select * from userDetail where email='$ss'";



$res=mysql_query($sql);
	
		$flag=0; $c=""; $d=""; $e="";

		while($row=mysql_fetch_array($res))
		{	
		 $d=$row['password'];
				$flag=1; // true
		} //end of loop


	if($flag==1)
	{
	echo "<form name='f1' method='post' action='changePswNext.php'>";
	echo "<br>User &nbsp; ";
	echo "<input type='text' name='usr' value='$ss'>";
	echo "<br><br>Old Password &nbsp; ";
	echo "<input type='text' name='ps1' value='$d'>";

	echo "<br><br>New Password &nbsp; ";
	echo "<input type='text' name='ps2' value=''>";

	echo "<br><br>Click &nbsp; ";
	echo "<input type='submit' name='sub' value='update'>";

	}
?>


</div>

</div>