<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Login to Admin panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link  rel="stylesheet" href="style.css" type="text/css">
    <style>
        body{background-image:url(images/admin.jpg);}
    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"  onLoad=	"window.document.adminLoginForm.formuser.focus()" bgcolor="#87CEEB">
<table width="100%" height="22%" border="0" align="center" cellpadding="0" cellspacing="0">

</table>
<td align="left" height="26" background="but.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="../dbms.php"><font color="#FFFFFF" style="font-size:20px">Home</font></a></td>
                            </tr>

<table width="27%" align="center" vspace="30" cellspacing="0">

<form method="post" name="adminLoginForm" action="adminLogin.php">

    <tr>
	 <td width="35%"  >&nbsp;</td>
      <td width="8%"  >&nbsp;</td>
      <td width="57%" ><font face="verdana" color="#FFF0F5"style="font-size:26px"><u><b>Admin Login</b></u></font></td>
    </tr>
	<tr>
	 <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
	<tr>
	 <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr>
	 <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr class="lgbg">
      <td  align="right"><font face="verdana" style="font-size:14px" >User Name</font></td>
	  <td align="center"><font face="verdana" style="font-size:12px" color="#87CEEB"><b>:</b></font></td>
      <td><input type="text" name="formuser" ></td>
    </tr>
	<tr>
	<tr>
	 <td >&nbsp;</td>
      <td>&nbsp;</td>
      <td >&nbsp;</td>
    </tr>

    <tr class="lgbg">
      <td  align="right"><font face="verdana" style="font-size:14px" color="#292421">Password</font></td>
	  <td align="center"><font face="verdana" style="font-size:12px" color="#87CEEB"><b>:</b></font></td>
      <td><input type="password" name="formpassword" "></td>
    </tr>
	<tr>
	<td >&nbsp;</td>
	<td >&nbsp;</td>
	<td >&nbsp;</td>
	</tr>

    <tr>
      <td >&nbsp;</td>
	  <td >&nbsp;</td>
      <td ><input class="listmenu" type="submit" name="submit" value="Login"></td>
    </tr>


</form>
</table>

</body>


</html>
