<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
	    header('location:admin/admindash.php');
    }
?>
<!DOCTYPE HTML>
<HTML lang="en_US">
<HEAD>
    <meta charset="UTF-8"> 
    <TITLE>ADMIN LOGIN</TITLE>
</HEAD>
    <style>
	    A{text-decoration:none;}
    </style>
<BODY bgcolor="red" link="white" vlink="white" alink="yellow">
    <br><h1><font color="white" type="ALGERIAN"><B>GAS BOOKING SYSTEM</b></h1></font>
	<hr size=5 COLOR= "white"><br>
	<a href="index.php">HOME</a>
	<a href="aboutus.php">&nbsp&nbsp&nbsp ABOUT US</a>
	<a href="adminlogin.php">&nbsp&nbsp&nbsp  LOGIN</a>
	<a href="contact.php">&nbsp&nbsp&nbsp  CONTACT US</a><br><br>
    <img src="C:\wamp64\www\gbsp\images/CKVcHr_UMAAi8Rp.jpg" height="220" width=100%><BR>
	<br><FONT COLOR="WHITE" type="Algerian" SIZE="6"><b>Admin Login :</b>
    <hr WIDTH=80% ALIGN = "LEFT" size="2" color="white"><BR><BR>
	<font color="white">
	<form action ="adminlogin.php" method="post">
	    <table align = "center" border="1">
		    <tr>
		        <td>Username</td>
				<td><input type ="text" name ="uname" required ></td>
		    </tr>	
		    <tr>
		        <td>Password</td>
			    <td><input type ="password" name ="pass" required ></td>
		    </tr>
	        <tr>
		        <td colspan="2" align = "center"><input type ="submit" name ="login" value = "Login"></td>
		    </tr>
		</table>
	</form>
	</font>
	<font align="left"><a href = "registration.php">Clickhere->> To Register or Add Booking...</a></font>
	<hr size= "2" COLOR= "white">
	<font color = "white" align = "right" size = "1" >@projectgbsp</font>
</body>
</html>

<?php
    include('dbcon.php');
    if(isset($_POST['login']))
    {
	    $username = $_POST['uname'];
	    $password = $_POST['pass'];
	    $qry="SELECT * FROM admin WHERE username ='$username' AND password='$password'";
	    $run=mysqli_query($con,$qry);
	    $row= mysqli_num_rows($run);
	    if($row <1)
	    {
		    ?>
		    <script>
		        alert('Username or Password not match !!');
			    window.open('adminlogin.php','_self');
	        </script>
		    <?php
	    }
	    else
	    {
		    $data = mysqli_fetch_assoc($run);
		    $id=$data['id'];
		    $_SESSION['uid']=$id;
		    header('location:admin/admindash.php');
		}
    }
?>