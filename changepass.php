<?php
session_start();
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("proj");
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
top:200px;
	
		width: 30%;
		height:29%;
		border-width:1px;
border-style:solid;
border-color:grey;
padding-left:40px;
padding-top:40px;
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

 td{   background-color: #ff6666;
 	padding-top: 12px;
 	padding-bottom: 12px;
    padding-left:30px;
    padding-right:30px; 
    border: 1px solid black;
   


}
td:hover{
background-color: #ffcccc;
border-color: black;
	    border-spacing: 0px;
	    border-width: 2px;
}

table{
	font-family: "Baskerville old face";
	border-collapse: collapse;
	width: 100%;
		height: 100%;
}
body{
background:radial-gradient(#ffcccc,white);
}
</style>






<form name="f1" method='post' action='changePswNext.php'> 
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
$a=$_SESSION['usrlog'];
if($a==""){
}
else{


echo "<section>";
echo "<table id='display'>";
echo "<tr> <td> <a href='allusers.php'> ALL Users</a></td></tr>";
echo "<tr> <td> <a href='admin.php'> Passenger Details</a></td></tr>";
echo "<tr> <td> <a href='admin2.php'> Update Routes</a></td></tr>";
echo "<tr> <td> <a href='admin3.php'> Update Bus Details</a></td></tr>";
echo "<tr> <td> <a href='view.php'> Feedback</a></td></tr>";
echo "<tr> <td> <a href='logout.php'> Logout</a></td></tr>";
echo "</table>";
echo "</section>";


echo '<div id="pl">';

$a=$_SESSION['usrlog'];
$b=$_SESSION['p'];

$_SESSION['usrlog']=$a;
$_SESSION['p']=$b;

$sql="select * from admin where email='$a'";



$res=mysql_query($sql);
	
		$flag=0; $c=""; $d=""; $e="";

		while($row=mysql_fetch_array($res))
		{	
		 $d=$row['pass'];
				$flag=1; // true
		} //end of loop


	if($flag==1)
	{
	echo "<br>User &nbsp; ";
	echo "<input type='text' name='usr' value='$a'>";
	echo "<br><br>Old Password &nbsp; ";
	echo "<input type='text' name='ps1' value='$d'>";

	echo "<br><br>New Password &nbsp; ";
	echo "<input type='text' name='ps2' value=''>";

	echo "<br><br>Click &nbsp; ";
	echo "<input type='submit' name='sub' value='update'>";

	}

echo '</div><div id="ft">';

	
echo '<hr>
<center><font color="grey";>RedBus.com</font></center>
</div>
<div id="lt">
<br><br><br><br><br><br><br>
<marquee behavior="scroll" direction="left"><img src="Redbus.png" width="160" height="70 " alt="Natural" /></marquee>	

</div>';
}
?>
</form>























