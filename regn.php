<?php
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



#pl{
	position:absolute;
left:450px;
top:185px;
	
		width: 33%;
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
#rt{
color:red;
padding-left:30px;
background-color:#ffcccc;	
		border: 1px solid black;
		float: left;
		width: 15%;
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


body{
background:radial-gradient(#ffcccc,white);
}

</style>






<form name="f1" action="try.php" method="post">
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

<div id="pl">
<b><font color='red'; size='5px';>Admin Details</font></b>
<br><br>
<?php

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['gen'];
$e=$_POST['dob'];



$sql="insert into admin values('$a','$b','$c','$d','$e')";
$res=mysql_query($sql);
$sql="select * from admin where email='$b'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$res1=mysql_query($sql);
$f=0;
if($res && $row['naam']==$a && $row['pass']==$c)
{       echo "<h3><font color='red';>Registration Succcessful</font></h3>";
	echo "<table width='400' border=1>";
	
	echo "<tr>";
	echo "<td>Name</td>";
	echo "<td>Email</td>";
	echo "<td>Password</td>";
	echo "<td>Gender</td>";
	echo "<td>Date of Birth</td>";
	echo "</tr>";
	$f=1;
	while($row1=mysql_fetch_array($res1))
	{	
		echo "<tr>";
		echo "<td>".$row1['naam']."</td> ";
		echo "<td> ".$row1['email']."</td>";
		echo "<td> ".$row1['pass']."</td>";
		echo "<td> ".$row1['gen']."</td>";
		echo "<td> ".$row1['dob']."</td>";					
		echo "</tr>";
	}

	echo "</table>";
}


else
echo "<br> Not Done [Account with same email-id already exists] ";
?>

</div>
<div id="ft">
<center><a href="adlogin.php">LOGIN</a></center>
<hr>
<center>RedBus</a></center>
</div>
<div id="lt">
<br><br><br><br><br><br><br>
<marquee behavior="scroll" direction="left"><img src="Redbus.png" width="160" height="70 " alt="Natural" /></marquee>
</div>
<div id="rt">
<br><br><br><br><br><br><br>
<h3>Welcome To Admin</h3>
</div>
</form>























