<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("proj");
$a=$_POST['busid'];
$x=$_SESSION['usrlog'];
$y=$_SESSION['p'];
$_SESSION['usrlog']=$x;
$_SESSION['p']=$y;
$_SESSION['busid']=$a;
?>




<style>
#hd{
		width: 100%;
		height: 11%;
		/*background:linear-gradient(red,black,black,red);*/
		background:linear-gradient( #ff9999,#ffe6e6);
		font-family: "magneto";
		font-size: 20px;
		/*color: white;*/
		color:#ff6666;
		border:1px solid red;
	}

#nv{
		
	}


section{
		border: 1px solid black;
		float: left;
		width: 17%;
		height: 50%;
		background-color: red;
box-shadow: 5px 5px 5px #888888;
	}  
#pl{
	position:absolute;
left:450px;
top:185px;
			border-width:1px;
border-style:solid;
border-color:grey;
padding-left:40px;
padding-top:20px;
		width: 33%;
		height:29%;

		
}


h2{ padding:20px 20px;
}


#ft{position:absolute;
left:0px;
top:550px;
	
width: 100%;
height:29%;
}

input[type=submit]{
text-decoration: bold;
		width: 30%;
		height:17%;
		color: white;
		font-family: "Baskerville old face";
		font-size: 20px;
		background-color: #ff4d4d;
		transition-duration: 0.4s;
		float: bottom;
		border-color: red;

}

input[type=submit]:hover{
	    border-color: black;
	    border-spacing: 0px;
	    border-width: 2px;
color:red;
	    background-color:  #ffcccc; 
}

#lt{

background-color:#ffcccc;	
		border: 1px solid black;
		float: right;
		width: 17%;
		height: 50%;
		
}

a	{
	transition-duration: 0.4s;
    text-decoration:none;
	font-size:20px;
	color:#990000;
	}
a:hover	{
	text-decoration:none;
	color:grey;
	}

 #t{   background-color: #ff6666;
 	padding-top: 12px;
 	padding-bottom: 12px;
    padding-left:30px;
    padding-right:30px; 
    border: 1px solid black;
   


}
#t:hover{
background-color: #ffcccc;
border-color: black;
	    border-spacing: 0px;
	    border-width: 2px;
}

#display{
	font-family: "Baskerville old face";
	border-collapse: collapse;
	width: 100%;
		height: 100%;
}
body{
background:radial-gradient(#ffcccc,white);
}

</style>



<script type="text/javascript">
function OnSubmitForm()
{
  if(document.pressed == 'Source')
  {
   document.f1.action ="try22.php";
  }
  else if(document.pressed == 'Destination')
  {
    document.f1.action ="try24.php";
  }
  return true;
}
</script>




<form name="f1" onsubmit="return OnSubmitForm();">
<title>Online Bus Management System</title>


<div id="hd">
		<center>
		<h1 style="margin:1%;">Red Bus</h1>
		</center>
</div>

<div id="nv">

<ul>
		<ul>
		<li>Home</li>
		</ul>
</ul>

</div>
<hr>
	<marquee style="font-family:calibri;color:red;font-size:15px">Welcome to the Red Bus Service.Wish you a very happy journey.</marquee>
<hr>

<?php
if($a=="")
{}
else{
echo "<section>";
echo "<table id='display'>";
echo "<tr> <td id='t'> <a href='allusers.php'> ALL Users</a></td></tr>";
echo "<tr> <td id='t'> <a href='admin.php'> Passenger Details</a></td></tr>";
echo "<tr> <td id='t'> <a href='admin2.php'> Update Routes</a></td></tr>";
echo "<tr> <td id='t'> <a href='admin3.php'> Update Bus Details</a></td></tr>";
echo "<tr> <td id='t'> <a href='view.php'> Feedback </a></td></tr>";
echo "<tr> <td id='t'> <a href='logout.php'> Logout</a></td></tr>";
echo "</table>";
echo "</section>";

echo '<div id="pl">';




$sql="select * from routes where busid=$a";
$res=mysql_query($sql);
$res1=mysql_query($sql);
$row=mysql_fetch_array($res);
$f=0;

if($res && $row['busid']==$a)

{       echo "<h3><font color='red';>Route Details</font></h3>";
	echo "<table width='400' border=1>";
	


	echo "<tr>";
	echo "<td>Bus-id</td>";
	echo "<td>Source</td>";
	echo "<td>Destination</td>";
	echo "<td>Departure Time</td>";
	echo "</tr>";
	$f=1;

	while($row1=mysql_fetch_array($res1))
	{	

		$i= $row['busid'];
		echo "<tr>";
		echo "<td>".$row1['busid']."</td>";
		echo "<td> ".$row1['source']."</td>";
		echo "<td> ".$row1['destination']."</td>";
		echo "<td> ".$row1['departuretime']."</td>";		
		echo "</tr>";
	}

	echo "</table>";
	$_SESSION['busid']=$i;
}


else
echo "<br> Not Found ";

if($f==1){
echo '<h3>Click:  &nbsp;&nbsp; <input type="submit" name="operation" onclick="document.pressed=this.value" value="Source">&nbsp;&nbsp;<input type="submit" name="operation" onclick="document.pressed=this.value" value="Destination"></h3>';
}
}

?>
</div>

<div id="ft">
<hr>
<center><font color="grey">RedBus.com</font></center>
</div>
<div id="lt">
<br><br><br><br><br><br><br>
<marquee behavior="scroll" direction="left"><img src="Redbus.png" width="160" height="70 " alt="Natural" /></marquee>
</div>
</form>






















