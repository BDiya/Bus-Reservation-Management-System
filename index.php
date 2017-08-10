<html>
<style>
#container{ width:800px;height:500px; 
border:1px solid #ccc;
}
#banner{ background:#CCC;
height:100px;color:navy;font-size:40px;
}
#row2{ border:1px dotted blue;
height:24px;
}
th	{padding:30px 10px 5px;color:red;}
td	{padding:8px; }
	
</style>

<script language="javascript">
function chk()
{
x=document.f1.usr.value;
y=document.f1.psw.value;
	if(x=="" || y=="" )
	{
	alert(" field blank "); 
	return false;
	}
	else 
	return true;

}
</script>



<body>
<center>
<div id="container">
<div id="banner"> EMS </div>
<div id="row2"> &nbsp; </div>
<div id="main">
	<form name="f1" method="post" action="checkLogin.php" onsubmit="return chk()">
	<table>
	<tr> <th colspan="2">
	 Event Register/Login </th> </tr>
	<tr>
	<td> User </td>
	<td> <input type="text" name="usr"> </td>
	</tr>
	<tr>
	<td> Password </td>
	<td> <input type="password" name="psw"> </td>
	</tr>

	<tr>
	<td> Click </td>
	<td> <input type="submit" name="b1" value="login"> 
 &nbsp; <a href="userRegister.php"> new user ? </a>
</td>
	</tr>
	</form>
</div>

</div>