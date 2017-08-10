<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("proj");
	$src=$_GET['strt'];
	$dest=$_GET['destination'];
	$sql="select * from routes where source='$src' and destination='$dest'";
	$res=mysql_query($sql);
	$sql2="select distinct source from routes";
	$res2=mysql_query($sql2);
	$sql3="select distinct destination from routes";
	$res3=mysql_query($sql3);

	?>

<script language="javascript">
	function chk()
	{
		
		src=document.f1.strt.value;
		dest=document.f1.destination.value;
		if(src==dest)
		{
			alert("error");
			return false;
		}
		
		return true;
	}
</script>
<form name="f1" action="routes.php" method="get" onsubmit="return chk()">
	<table width="400">
	<tr>
	<td>
	<h3 style="color:red;font-family:calibri;">Select Source</h3>
	</td>
	<td>
	<h3 style="color:red;font-family:calibri;">Select Destination</h3>
	</td>
	</tr>
	<tr>
	<td>
	<select name="strt">
		<?php 
		while($arr=mysql_fetch_array($res2))
		{
			$city=$arr['source'];
			echo "<option>$city</option>";
			} ?>
		
	</select>
	</td>
	<td>
	<select name="destination">
		<?php 
		while($arr1=mysql_fetch_array($res3))
		{
			$city1=$arr1['destination'];
			echo "<option>$city1</option>";
			} ?>
	</select>
	</td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="submit" name="submit" value="Check" style="width:90px;padding:.5%;background-color:red;color:white;">
	</td>
	</tr>
	</table>
</form>
<?php 
	echo "<table width=400 border=1px>";

	while($source=mysql_fetch_array($res))
	{ 
		$bid=$source['busid'];
		$src=$source['source'];
		$destination=$source['destination'];
		$departuretime=$source['departuretime'];
		echo "<h2 style="."color:red;font-family:calibri;text-decoration:underline".">Result:::</h2>";
		echo "<tr>";
		echo "<td>";
		echo "Bus ID";
		echo "</td>";
		echo "<td>";
		echo "Source";
		echo "</td>";
		echo "<td>";
		echo "Destination";
		echo "</td>";
		echo "<td>";
		echo "Departure Time";
		echo "</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>";
		echo "$bid";
		echo "</td>";
		echo "<td>";
		echo "$src";
		echo "</td>";
		echo "<td>";
		echo "$destination";
		echo "</td>";
		echo "<td>";
		echo "$departuretime";
		echo "</td>";
		echo "</tr>";
	}
	echo "</table>";

?>

