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
	include('titlehead.php');
?>
<font color="white"><center><h2><U>ADD BRANCH</U></center></H2></FONT>
<form method = "post" action = "addbranch.php">
<table border="1" align = "center" style = "width:70%; margin-top:40px;">

     <tr>
	 <th>Branch Name</th>
	 <td><input type= "text" name ="name" placeholder="Enter Branch" required></td>
	 </tr>
	 	 <tr>
	      <th>Branch E-mail</th>
		  <td><input type= "text" name ="email" placeholder="Enter E-mail" required>
          </td>
	 </tr>
   
     <tr>
	 <th>Branch Phone</th>
	 <td><input type= "text" name ="phone" placeholder="Enter Phone" required></td>
	 </tr>
     	 <tr>
	      <th>City</th>
		  <td>
		   <input type= "text" name ="city" placeholder="Enter City" required>   
          </td>
	 </tr>
	      <tr>
	 <th>State</th>
	 <td><input type= "text" name ="state" placeholder="Enter State" required></td>
	 </tr>
	      <tr>
	 <td colspan = "2" ALIGN="CENTER"><input type="submit" name="submit" value="Submit"></td>
	 </tr>
</table>
</form>
</BODY>
</html>
<?php
if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$name= $_POST['name'];
	$email= $_POST['email'];
	$phone=$_POST['phone'];
	$city= $_POST['city'];
	$state= $_POST['state'];

	
	$qry="INSERT INTO `branch`(`name`, `email`, `phone`, `city`, `state`) 
	       VALUES ('$name', '$email', '$phone', '$city', '$state')";
		  if($qry==false)
		  {
			  ?>
			  <script>
		alert('Query is wrong');
		</script>
			  <?php
		  }
	$run=mysqli_query($con,$qry);
	if($run == true)
	{
		?>
		<script>
		alert('Data Inserted Successfully!!');
		</script>
		<?php
	}
	else{
		echo("error:".mysqli_error($con));
	    }
		
}
?>