<style>
#hd{
		width: 100%;
		height: 11%;
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
		background-color:#ffcccc;
		
	}  
#pl{
	position:absolute;
left:300px;
top:185px;
	
		width: 50%;
		height:50%;
		

}

input[type=button]{

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

input[type=button]:hover{
		border-color: black;
	    border-spacing: 0px;
	    border-width: 2px;
	    background-color: #ff6666; 
	}

h2{ padding:20px 20px;
}

#ft{position:absolute;
left:0px;
top:550px;
	
		width: 100%;
		height:29%;
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
		background-color: #ff6666;
		color:white;
	}
#rt{
		width: 20%;
		height: 51%;
		background-color: #ffcccc;
		float: right;
border:1px solid black;
		
	}
body{
background:radial-gradient(#ffcccc,white);
}
</style>





<script type="text/javascript">
function OnSubmitForm()
{
  if(document.pressed == 'Login')
  {
   document.f1.action ="Logver.php";
  }
  return true;
}
</script>



<body >
<form name="f1"  method="post" onsubmit="return OnSubmitForm();">
<title>Online Bus Management System</title>


<div id="hd">
		<center>
		<h1 style="margin:1%;">Red Bus</h1>
		</center>
</div>

<div="nv">

<ul>
		<ul>
		<li>Home
	</li> 
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

<div id="pl" >
						<img src="red.jpg" width="100%" height="100%" alt="image">
				
</div>

<div id="ft">
<hr>
<center>RedBus.com</center>
</div>


<div id="rt">

<center><h3>Admin Login<h3></center>


<center>
<table>



<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>

<tr>
<td>Email ID</td>
<td>&nbsp;&nbsp;<input type="email" name="email"></td>
</tr>
					
<tr>
<td>Password</td>
<td>&nbsp;&nbsp;<input type="password" name="password"></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
<td>&nbsp;&nbsp;<input id="but" type="submit" onclick="document.pressed=this.value" value="Login" name="login" style="margin-top:5%;width:50%;"></td>
</tr>

<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>


					
</table>
</center>
</div>
</form>
</body>





















