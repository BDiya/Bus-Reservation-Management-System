
<script language="javascript">
	function check()
	{
		email=document.f1.email.value;
		password=document.f1.password.value;
		if(email==""||password=="")
		{
			alert("enter all data");
			return false;
		}
		return true;
	}
</script>

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
	}
	#leftblk{
		width: 17%;
		height: 50%;
		background-color: red;
		float: left;
	}
	#rightblk{
		width: 20%;
		height: 50%;
		background-color: orange;
		margin: .5%;
		float: right;
	}
	nav{
		background-color: white;
	}
	#center{
		float: right;
		width: 61.04%;
		height:61%;
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
		font-family: "calibri";
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
	article{
		padding: 10px;
		margin-left: 10px;
	}
	
	#but{
		padding: 2%;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
		border-bottom-color: red;
		transition-duration:0.4s;
	}
	#but:hover{
		background-color: red;
		color:white;
	}


</style>

	<title>Online Bus Management System</title>
</head>
	<header>
		<center>
		<h1 style="margin:1%;">Red Bus</h1>
		</center>
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
	<aside id="rightblk">
			<center>
			<h3>Login<h3>
			</center>
			<form name='f1' method="post" action="page1.php" onsubmit="return check()">
			<center>
				<table>
					<tr>
						<td>
							Email ID
						</td>
						<td>
							<input type="email" name="email" placeholder="enter email">
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
							<input type="password" name="password" placeholder="enter password"/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input id="but" type="submit" value="Login" name="login" style="margin-top:5%;width:50%;"></td>
					</tr>
					
				</table>
			</center>
			</form>
					<br>
					<br>
			<form action="registration.html">
				<center>
				<table>
					<tr>
					<td>New User?</td>
						
					<td><input id="but" type="submit" value="Register Now" name="reg" style="padding:5%;"></td>						
					<tr>
				</table>	
				</center>	
			</form>	
			
		</aside>
		<section>
			<div>
				<div id="leftblk" style="margin:.2%;">
					<button onclick="window.location.href='book.php'">New Booking</botton>
					<button onclick="window.location.href='routes.php'">Routes</button>
					<button onclick="window.location.href='gallery.php'">Gallery</button>		
					<button onclick="window.location.href='contactus.php'">Contact us</button>
					<button onclick="window.location='http://localhost/project/feedback.php'">Feedback</button>
					<button onclick="window.location.href='aboutus2.php'">About us</button>
				</div>
					<div id="center" style="margin:.2%"; >
					<center>
						<img src="road.jpg" width="95%" height="95%" alt="image">
						<hr>
						<h5>Designed by:Team Alpha</h5>
					</center>
				</div>
				
			</div>
		</section>

	</div>

</body>
</html>