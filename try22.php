<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("proj");
$x=$_SESSION['usrlog'];
$y=$_SESSION['p'];
$a=$_SESSION['busid'];

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
		background-color: white;
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
	
		width: 33%;
		height:32%;
		border-width:1px;
border-style:solid;
border-color:grey;
padding-left:40px;
padding-top:20px;
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
		width: 20%;
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






<form name="f1" action="try23.php" method="post">
<title>Online Bus Management System</title>


<div id="hd">
		<center>
		<h1 style="margin:1%;">Red Bus</h1>
		</center>
</div>

<div="nv">

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
echo "<tr> <td id='t'> <a href='view.php'> Feedback Reply</a></td></tr>";
echo "<tr> <td id='t'> <a href='logout.php'> Logout</a></td></tr>";
echo "</table>";
echo "</section>";
echo '<div id="pl">';






$sql="select * from bus where busid=$a";
$res=mysql_query($sql);

if($res)
{       echo "<h3><font color='red';>Bus Details</font></h3>";
	echo "<table width='400' border=1>";
	


	echo "<tr>";
	echo "<td>Bus-id</td>";
	echo "<td>Type</td>";
	echo "</tr>";

	while($row=mysql_fetch_array($res))
	{	
		echo "<tr>";
		echo "<td>".$row['busid']."</td>";
		echo "<td> ".$row['type']."</td>";		
		echo "</tr>";
	}

	echo "</table>";
        $_SESSION['busid']=$a;
}


else
echo "<br> NOT Found ";


echo "<h3><font color='red';>New Source</font></h3>";
echo '<h3><input type="text" name="src" placeholder="   e.g. Kolkata" value="">
&nbsp;&nbsp;&nbsp;
<input type="submit" name="sub" value="Change"><h3>';
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






















