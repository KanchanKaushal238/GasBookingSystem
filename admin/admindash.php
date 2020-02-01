<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
		echo "";
	}
	else
	{
	    header('location: ../adminlogin.php');
	}
?>
<?php
	include('header.php');
?>
   <br><h1><font color="white" type="ALGERIAN"><B>GAS BOOKING SYSTEM</b></h1></font>
<hr size=5 COLOR= "white"><br>
<a href="../index.php">HOME</a>
<a href="../aboutus.php">&nbsp&nbsp&nbsp ABOUT US</a>
<a href="../adminlogin.php">&nbsp&nbsp&nbsp  LOGIN</a>
<a href="../contact.php">&nbsp&nbsp&nbsp  CONTACT US</a><br><br>
<div class = "admintitle" align = "center">
    <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size=20px;">LOGOUT</a></h4>
    <h1>Welcome to Admin Dashboard</h1>
</div>
	<br><FONT COLOR="WHITE" type="Algerian"><b>WELCOME TO GAS BOOKING SYSTEM</b>
	<hr WIDTH=80% ALIGN = "LEFT" size="2" color="white">
<div class="dashboard">
    <table  style="width:50%;" align="center">
        <tr>
            <td>1.</td>
			<td><a href="addcustomer.php">Add Customer</a></td>
        </tr>
    <tr>
        <td>2.</td>
		<td><a href="customerreport.php">Customer Report</a></td>
    </tr>
    <tr>
        <td>3.</td>
		<td><a href="addbooking.php">Add Booking</a></td>
    </tr>
    <tr>
        <td>4.</td>
		<td><a href="bookingreport.php">Booking Report</a></td>
    </tr>
    <tr>
        <td>5.</td>
		<td><a href="addconnection.php">Add Connection</a></td>
    </tr>
    <tr>
       <td>6.</td>
	   <td><a href="connectionreport.php">Connection Report</a></td>
    </tr>
    <tr>
        <td>7.</td>
		<td><a href="addbranch.php">Add Branch</a></td>
    </tr>
    <tr>
        <td>8.</td>
		<td><a href="branchreport.php">Branch Report</a></td>
    </tr>
</table>
</div>
    <hr size= 2 COLOR= "white">
	<font color = "white" align = "right" size = "1" >@projectgbsp</font>
</body>
</html>
	   