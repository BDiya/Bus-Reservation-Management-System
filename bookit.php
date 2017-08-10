<?php
	session_start();
	$name=$_SESSION['name'];
	$email=$_SESSION['email'];
	if($name=="")
		$name="Guest";
?>
<html>
<head>
<style>
	#container{
		width: 100%;
		height: 100%;
		/*background-image: url("leftback.jpg");*/
		background-color: #ffffff;
	}
	header{
		width: 100%;
		height: 11%;
		/*background:linear-gradient(red,black,black,red);*/
		background-color: red;
		font-family: "magneto";
		font-size: 20px;
		/*color: white;*/
		color:white;
		border:1px solid red;
	}
	
	section{
		float: left;
		width: 17%;
		height: 50%;
		background-color: red;
	}
	nav{
		background-color: white;
	}
	article{
		float: center;
	}
	li{
		
	}
	
	button {

    	text-decoration: bold;
		width: 100%;
		height:17%;
		color: white;
		font-family: "Baskerville old face";
		font-size: 20px;
		background-color: red;
		transition-duration: 0.4s;
		float: bottom;
		border-color: red;
	}

	button:hover {
		border-color: black;
	    border-spacing: 0px;
	    border-width: 2px;
	    background-color: #ff6666; 
	}

</style>

	<title>Online Bus Management System</title>
</head>
<body>
	<header>
		<center>
		<h1 style="margin:1%;">Red Bus</h1>
		</center>
		<div style="float:right;color:gray;font-family:calibri;margin:15px;">
		<?php
			echo "Hi $name";
		?>
		</div>
	</header>
	<hr>
	<nav>
		<ul>
			<ul>
				<li>Home</li>
			</ul>
		</ul>
	</nav>
	<hr>
	<marquee style="font-family:calibri;color:red;font-size:15px">Welcome to the Red Bus Service.Wish you a very happy journey.</marquee>
	<hr>
		<section>
			<button onclick="window.location.href='http://localhost/project/book.php'">New Booking</botton>
			<?php 
				if($name=="Guest"||$email=="")
				{

				}
				else
				{
					echo "<button onclick="."window.location.href='http://localhost/project/mybooking.php'".">My Bookings</button>";
				}
			?>	
			<button onclick="window.location.href='http://localhost/project/routes.php'">Routes</button>
			<button onclick="window.location.href='gallery.php'">Gallery</button>
			<button onclick="window.location='http://localhost/project/contactus.php'">Contact us</button>
			<button onclick="window.location='http://localhost/project/feedback.php'">Feedback</button>
			<button onclick="window.location.href='aboutus2.php'">About us</button>
		</section>
		<aside>
			<form method="post" action="">
			
			<?php
						$flag=1;
					$src=$_SESSION['source'];
					$destination=$_SESSION['destination'];
					$bid=$_SESSION['bid'];
					$date=$_SESSION['date'];
					$seats=$_SESSION['seats'];
					$type=$_SESSION['type'];
					$time=$_SESSION['departuretime'];
					$con=mysql_connect("localhost","root","");
					$db=mysql_select_db("proj");
					$sql="insert into book(name,email,busid,seats,source,destination,bustype,depart_date,dept_time) values('$name','$email','$bid',$seats,'$src','$destination','$type','$date','$time')";

					if($src==""||$destination==""||$bid==""||$date==""||$seats==""||$type==""||$time=="")
					{$flag=0;}
					else{
						$res=(mysql_query($sql));
						
					}
					
				?>
				
		</form>
		<center>
		<?php
		if($flag==1)
		{?>
			<h2>Booked!</h2>
			<img src="ok.png">
			<?php
			$_SESSION['source']="";
			$_SESSION['destination']="";
			$_SESSION['bid']="";
			$_SESSION['date']="";
			$_SESSION['seats']="";
			$_SESSION['type']="";
			$_SESSION['departuretime']="";
		}
		else
		{?>
			<h2>Booking failed!</h2>
			<img src="nok.png">
			
		<?php
		}
		?>
		</center>
		</aside>

	</div>

</body>
</html>