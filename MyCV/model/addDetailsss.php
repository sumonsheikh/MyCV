<?php
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<form id="emform" method="post" action="insert.php" onsubmit="return valiform()">
<table border="2px">
<tr><th colspan="4">Personal Information</th></tr>
<tr><td>Name:</td>
<td><input type="text" id="name" name="name" placeholder="Your name.." /></td>
</tr>
<tr><td>Address:</td>
<td><textarea type="text" id="address" name="address" placeholder="Your address.." ></textarea></td>
</tr>
<tr><td>Mobile:</td>
<td><input type="text" id="mobile" name="mobile" placeholder="Your mobile Number.." /></td>
</tr>
<tr><td>Email:</td>
<td><input type="text" id="email" name="email" placeholder="Your email.." /></td>
<tr><td>Group:</td>
<td><input type="text" id="hsc_group" name="hsc_group" placeholder="Your Group.." /></td>

</tr>



<tr> <td> <input type="submit" id="submit" value="Add User"  /></td></tr>

</table>
</form>
</center>
<script>
function valiform()
{
	var a1=document.forms["emform"]["name"].value;
	var a2=document.forms["emform"]["address"].value;
	var a3=document.forms["emform"]["mobile"].value;
	var a4=document.forms["emform"]["email"].value;
	if(a1==null ||a1=="")
	{
		window.alert(" name must be field out");
		return  false;
	}
	else if(a2==null ||a2=="")
	{
		window.alert("address must be field out");
		return  false;
	}
	else if(a3==null ||a3=="")
	{
		window.alert("mobile must be field out");
		return  false;
	}
	else if(a4==null ||a4=="")
	{
		window.alert("email must be field out");
		return  false;
	}
}

</script>
</body>
</html>