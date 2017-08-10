<?php
	session_start();
	
?>
<style>
	#buton:hover{
		background-color: #acfacf;
	}
</style>
<html>
<head>
	<title></title>
</head>
<body>
<form method="get" action="bookit.php">
	
	<?php
			$src=$_GET['strt'];
			$dest=$_GET['destination'];
			$date=$_GET['date'];
			$seats=$_GET['seats'];
			$type=$_GET['type'];

			$_SESSION['source']=$src;
			$_SESSION['destination']=$dest;
			$_SESSION['date']=$date;
			$_SESSION['seats']=$seats;
			$_SESSION['type']=$type;


			$con=mysql_connect("localhost","root","");
			$db=mysql_select_db("proj");
			$sql="select busid,departuretime from routes where source='$src' and destination='$dest'";
			$res=(mysql_query($sql));
			echo "Bus Details-";
			echo "<select>";
			while($arr=mysql_fetch_array($res))
			{
				$bid=$arr['busid'];
				$departuretime=$arr['departuretime'];
				echo("<option>");
				echo("$bid-$departuretime");
				echo("</option>");
			}

			echo "</select>";
			$_SESSION['departuretime']=$departuretime;
			$_SESSION['bid']=$bid;
		?>
		<br>
		<br>
		<hr>

		<input id="buton" type="submit" value="Book Now" style="width:20%;color:white;background-color:red;padding:2%;font-size:24px;border-radius:8px;">
		
</form>
</body>
</html>

