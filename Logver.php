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
		background-color: #ffcccc;
box-shadow: 5px 5px 5px #888888;
	}  
#pl{
	position:absolute;
left:450px;
top:185px;
	
		width: 34%;
		height:43%;
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

<title>Online Bus Management System</title>

<div id="hd">
		<center>
		<h1 style="margin:1%;">RedBus</h1>
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

<section>
			<br><br><br><br><br><br><br>
<marquee behavior="scroll" direction="left"><img src="Redbus.png" width="160" height="70 " alt="Natural" /></marquee>
</section>




<div id="pl">

<?php

$b=$_POST['email'];
$c=$_POST['password'];
$_SESSION['email']=$b;

$sql="select * from admin where email='$b' and pass='$c'";
$res=mysql_query($sql);
     
$flag=0; $d=""; $e="";

while($row=mysql_fetch_array($res))
{
$d=$row['email'];		
$e=$row['naam'];
$flag=1;
} 


if($flag==1)
		{
		echo "<b><font color='red'; size='5px';>Successful Login</font></b><br>";
		echo "<br><h3> Email : $d</h3> ";
		echo "<h3> FullName : $e </h3><br> ";
		$_SESSION['usrlog']=$d;
		$_SESSION['p']=$c;//added
		echo "<br><font size='5px'; ><a href='AdminHome.php'>Proceed to access Admin Home</a></font>";			
		}
		else{
		echo "<br> Wrong emailid/Password <br>";
		echo "<a href='adlogin.php'> Try again</a>";
		}	



?>


</div>
<div id="ft">


<hr>
<center><font color="grey";>RedBus.com</font></center>
</div>

</form>






