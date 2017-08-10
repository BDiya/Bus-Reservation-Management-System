<?php
	session_start();
	$code="ok";
	$email=$_SESSION['email'];
	$name=$_SESSION['name'];
	$feed=$_POST['feed'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("proj");
	$status="ack";
	if($feed=="")
		$status="nak";
	else{
	$sql="insert into feedback(email,feedback) values('$email','$feed')";
	$res=mysql_query($sql);
	}
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
		border: 1px solid black;
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
	#logbut{
		height:17%;
		width: 100%;
		float: center;
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
			echo "Hi ".$_SESSION['name']."";
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
			<button onclick="window.location.href='http://localhost/project/contactus.php'">Contact us</button>
			<button onclick="window.location='http://localhost/project/feedback.php'">Feedback</button>
			<button onclick="window.location.href='aboutus2.php'">About us</button>
			<?php 
				if($name=="Guest"||$email=="")
				{

				}
				else
				{
					echo "<form name="."f1"." action="."routes.php"." method="."post".">";
					echo "<input id="."logbut"." type="."submit"." name="."submit"." value="."LogOut".">";
					echo "</form>";
				}
				?>
		</section>
		<aside>
		<center>
			<div>
				<h1 style="color:red";>Feedback<br><?php 
													if($status=="nak")
														echo "Not";
														echo "<br>";
													 ?>Submitted</h1>
													 <?php echo ""?>
				<br>
				<img src="<?php if($status=="ack")
								echo "http://localhost/project/ok.png";
								else
								echo "http://localhost/project/nok.png"; ?>">
			</div>
		</center>
		</aside>

	</div>

</body>
</html>