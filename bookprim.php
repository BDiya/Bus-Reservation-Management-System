<?php
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("proj");
	$sql2="select distinct source from routes";
	$res2=mysql_query($sql2);
	$sql3="select distinct destination from routes";
	$res3=mysql_query($sql3);
	?>
<style>
	#sel{
		width:100%;
	}
	#buton:hover{
	background-color: #ff6666;
	}

</style>
<div>
<form name="f1" method="get" action="book.php">
	<table width="600" cellspacing="2px">
	<tr>
		<td>
			<h3 style="color:red;font-family:calibri;">Select Source</h3>
		</td>
		<td>
			<h3 style="color:red;font-family:calibri;">Select Destination</h3>
		</td>
		<td>
			<h3 style="color:red;font-family:calibri;">Departure Date</h3>
		</td>
	</tr>
	<tr>
		<td>
		<select name="strt" id="sel">
			<?php
		while($arr=mysql_fetch_array($res2))
		{
			$city=$arr['source'];
			echo "<option>$city</option>";
			} ?>
		</select>
		</td>
		<td>
		<select name="destination" id="sel">
			<?php
		while($arr1=mysql_fetch_array($res3))
		{
			$city1=$arr1['destination'];
			echo "<option>$city1</option>";
			} ?>
		</select>
		</td>
		<td>
			<input type="date" name="date">
		</td>
	</tr>
	<tr>
		<td>
			<h3 style="color:red;font-family:calibri;">No of Passengers</h3>
		</td>
		<td>
			<h3 style="color:red;font-family:calibri;">Bus Type</h3>
		</td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="seats">
		</td>
		<td>
			<select name="type" id="sel">
				<option>AC</option>
				<option>NON-AC</option>
			</select>
		</td>
		<td>
			<input type="submit" name="submit" value="Check" style="width:100px;color:white;background-color:red;padding:2%;">
		</td>
	</tr>
		
	</table>

</form>
<?php
	include "book2.php";

?>
</div>