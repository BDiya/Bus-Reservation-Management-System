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
		
box-shadow: 5px 5px 5px #888888;
	}   
#pl{
	position:absolute;
left:450px;
top:185px;
	
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
input[type=button]{

    	text-decoration: bold;
		width: 100%;
		height:20%;
		color: white;
		font-family: "Baskerville old face";
		font-size: 20px;
		background-color: #ff6666;
		transition-duration: 0.4s;
		float: bottom;
		border-color: red;
	}

input[type=button]:hover{
		border-color: black;
	    border-spacing: 0px;
	    border-width: 2px;
	     background-color: #ffcccc;; 
	}

input[type=submit]{
text-decoration: bold;
		width: 20%;
		height:17%;
		color: white;
		font-family: "Baskerville old face";
		font-size: 20px;
		background-color: #ff6666;
		transition-duration: 0.4s;
		float: bottom;
		border-color: red;

}

input[type=submit]:hover{
	    border-color: black;
	    border-spacing: 0px;
	    border-width: 2px;
color:red;
	    background-color: #ffcccc; 
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

<section>
			<input type="button" value="All Users" onClick="">
			<input type="button" value="Passenger List" onClick="">
			<input type="button" value="Update Routes" onClick="">
			<input type="button" value="Update Bus Details" onClick="">
			<input type="button" value="Feedback " onClick="">
                       
</section>

<div id="pl">

<?php
$a=$_SESSION['usrlog'];
$b=$_SESSION['p'];
$c=$SESSION['busid'];
$d=$_SESSION['src'];
$e=$_SESSON['dst'];
$z=$_SESSION['rid'];
$w=$_SESSION['source'];
$v=$_SESSION['destine'];
$u=$_SESSION['type'];
$usr=$_SESSION['usr'];
$psw=$_SESSION['psw'];
$f=$_SESSION['departuretime'];

$_SESSION['usr']=$usr;
$_SESSION['psw']=$psw;
$_SESSION['usrlog']=$a;
$_SESSION['p']=$b;
$_SESSION['busid']=$c;
$_SESSION['src']=$d;
$_SESSION['dst']=$e;
$_SESSION['rid']=$z;
$_SESSION['source']=$w;
$_SESSION['destine']=$v;
$_SESSION['type']=$u;
$_SESSION['departuretime']=$f;
echo "<b><font color='red'; size='5px';>Admin: $a logged in</font></b>";
echo "<br><br>"

?>
<?php
$_SESSION['usrlog']="";
$_SESSION['p']="";
$_SESSION['busid']="";
$_SESSION['src']="";
$_SESSION['dst']="";
$_SESSION['rid']="";
$_SESSION['source']="";
$_SESSION['destine']="";
$_SESSION['type']="";
$_SESSION['usr']="";
$_SESSION['psw']="";
$_SESSION['departuretime']="";
session_destroy();
?>
<h2> Successfully Logged out </h2>
</div>
<div id="ft">
<hr>
<center><a href="adlogin.php">Login</a></center>
<br><br>

</div>
<div id="lt">
<br><br><br><br><br><br><br>
<marquee behavior="scroll" direction="left"><img src="Redbus.png" width="160" height="70 " alt="Natural" /></marquee>
</div>
</form>























