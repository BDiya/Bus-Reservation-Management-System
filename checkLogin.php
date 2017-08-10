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
height:24px;
}
th	{padding:30px 10px 5px;color:red;}
td	{padding:8px; }
	
</style>






<body>
<center>
<div id="container">
<div id="banner"> EMS </div>
<div id="row2"> &nbsp; </div>
<div id="main">

<?php
$con=mysql_connect("localhost","root","");
echo "<br> done connection <br>";

$db=mysql_select_db("abcd");
echo "<br> database ok <br>";

$a=$_POST['usr'];
$b=$_POST['psw'];



$sql="select * from userDetail where email='$a' AND password='$b'";



$res=mysql_query($sql);
	
		$flag=0; $c=""; $d=""; $e="";
		$f="";
		while($row=mysql_fetch_array($res))
		{
		 $c=$row['email'];		
		 $d=$row['fullname'];
		 $e=$row['phone'];		
		 $f=$row['typeUser'];		
	
			$flag=1; // true
		} //end of loop



		if($flag==1)
		{
		echo "<br> Successful Login <br> ";
		echo "<br> Email : $c <br> ";
		echo "<br> FullName : $d <br> ";
		echo "<br> Phn : $e <br> ";
		$_SESSION['usrlog']=$c;
		if($f=='admin')
		echo "<br><a href='AdminHome.php'>proceed</a>";		
		else
		echo "<br><a href='UserHome.php'>proceed</a>";		

		echo "<br>Login : ".$_SESSION['usrlog'];
		}
		else{
		echo "<br> Wrong User/Psw <br>";
		echo "<a href='index.php'> try again</a>";
		}	



?>



</div>

</div>