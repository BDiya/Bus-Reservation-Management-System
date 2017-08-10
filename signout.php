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
	echo " &nbsp; <a href='index.php'>HOME</a>";	
	?>
	</div>
 </div>
<div id="main">

<?php
$_SESSION['usrlog']="";
session_destroy();
?>
<h2> Successfully Logged out </h2>


</div>

</div>