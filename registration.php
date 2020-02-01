<!DOCTYPE HTML>
<HTML lang="en_US">
<HEAD>
     <meta charset="UTF-8"> 
     <TITLE>USER LOGIN</TITLE>
</HEAD>
<style>A{text-decoration:none;}</style>
<BODY bgcolor="red" link="white" vlink="white" alink="yellow">
       <br><h1><font color="white" type="ALGERIAN"><B>GAS BOOKING SYSTEM</b></h1></font>
	   <hr size=5 COLOR= "white"><br>
	   <a href="index.php">HOME</a>
	   <a href="aboutus.php">&nbsp&nbsp&nbsp ABOUT US</a>
	   <a href="adminlogin.php">&nbsp&nbsp&nbsp  LOGIN</a>
	   <a href="contact.php">&nbsp&nbsp&nbsp  CONTACT US</a><br><br>
       <img src="C:\wamp64\www\gbsp\images/CKVcHr_UMAAi8Rp.jpg" height="220" width=100%><BR>
	   <br><FONT COLOR="WHITE" type="Algerian" SIZE="6"><b>User Information:</b>
	   

	   
	   <hr WIDTH=80% ALIGN = "LEFT" size="2" color="white"><BR><BR>
	   <font color="white">
	   
<form method ="post" action = "registration.php">
<table style= "width:30%;" align = "center" border="1">
      <tr>
	      <td colspan="2" align = "center">Customer Information</td>
	  </tr>
	  <tr>
	      <td align = "left">CUSTOMER ID</td>
		  <td>
             <input type="text" name = "id" required>
		  </td>
	  </tr>
	 <tr>
	     <td align="left">Enter Phone Number</td>
		 <td>
		 
             <input type="text" name = "phno" required>
		 
		 </td>
	 </tr>
	 <tr>
	     <td colspan="2" align="center"><input type = "submit" name = "submit" value = "Show Info"</td>
	 </tr>
</table>
</form>
New Customers can directly contact to admin for their registration
</body>
</html>	
<?php
if (isset($_POST['submit']))
{
	$id=$_POST['id'];
	$phno=$_POST['phno'];
	
	include('dbcon.php');
	include('function.php');
	
	showdetails($id,$phno);
	
}
?>
	