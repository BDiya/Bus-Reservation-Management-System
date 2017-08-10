
<html>
<script language="javascript">
	function getalert()
	{
		name=document.f1.name.value;
		e=document.f1.email.value;
		a=e.indexOf('@');
		b=e.indexOf('.');
		password=document.f1.password.value;
		conpassword=document.f1.conpassword.value;
		gen=document.f1.gen.value;
		dob=document.f1.dob.value;
		m=document.f1.gen[0].checked;
		f=document.f1.gen[1].checked;


		if(name=="")
			alert("enter name");
		else if(e=="")
			alert("email blank");
		else if(a==-1)
			alert("@ missing in emailid");
		else if(b==-1)
			alert(". missing in emailid");
		else if(password=="")
			alert("enter password");
		else if(conpassword=="")
			alert("retype password");
		else if(m==false && f==false)
			alert("Gender field blank");
		else if(dob=="")
			alert("enter date of birth");
		else if(password!=conpassword)
			alert("password and confirm password do not match");
		else if(password.length<8)
			alert("password length must be greater than or equal to 8");
		else
			{
			confirm("all okay! do you wish to continue?");
                        document.f1.action ="regn.php";
			}

	}
</script>
<style>
	#container{
		margin-left: 10%;
		margin-right: 10%;
	}
	#topright{
		float: right;
		width: 10%;
	}

	
</style>
<head>
	<title>Online Bus Management System</title>
</head>
<body>

<div id="container">
	<div id="top">
		<div id="topleft">
			<p style="font-family: magneto;font-size: 30px;color: red;margin-top:2%;">Red Bus</p>
		</div>
		
	</div>
	<hr>
	<h4 style="text-decoration:bold;font-family:Calibri;margin-bottom:0px;">New Admin?Register here</h4>
		<form method="post" name="f1">
			<table>
				<tr>
					<td>
						Your Full Name
					</td>
					<td>
						<input type="text" name="name">
					</td>
				</tr>
				<tr>
					<td>
						Your current Email ID
					</td>
					<td>
						<input type="text" name="email" placeholder="  e.g. xyz@gmail.com">
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
					<td>
						<input type="password" name="password"/>
					</td>
				</tr>
				<tr>
					<td>
						Retype Password
					</td>
					<td>
						<input type="password" name="conpassword"/>
					</td>
				</tr>
				<tr>
					<td>
						Gender
					</td>
					<td>
						Male:<input type="radio" name="gen" value="male" />
					
						Female:<input type="radio" name="gen" value="female" />
					</td>
				</tr>
				<tr>
					<td>
						Date of birth
					</td>
					<td>
						<input type="date" name="dob" placeholder="  yyyy/mm/dd">
					</td>
				</tr>
				<tr><td> </td></tr>
				<tr><td> </td></tr>
				<tr><td> </td></tr>
				<tr>
					<td>
					</td>
					<td>
						<input type="submit" value="Sign Up" name="signup" onclick="getalert()">
					</td>
				</tr>
			</table>
		</form>
		<hr style="margin-top:4%;">
		<center>
		<div>
			<p>RedBus.com</p>
		</div>
		</center>
</div>

</body>
</html>