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
	include('../dbcon.php');
	$sid=$_GET['sid'];
	$sql="SELECT * FROM `customer` WHERE `id` = '$sid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
?>
<font color="white"><center><h2><U>Edit Customer</U></center></H2></FONT>
<form method = "post" action = "updatedata.php" enctype="multipart/form-data">

<table border="1" align = "center" style = "width:70%; margin-top:40px;">

     <tr>
	 <th>Customer Name</th>
	 <td><input type= "text" name ="name" value="<?php echo $data['name'];?>" required=""></td>
	 </tr>
	 <tr>
	 <th>Customer ID Number</th>
	 <td><input type= "text" name ="id" value="<?php echo $data['id'];?>" required=""></td>
	 </tr>

     <tr>
	 <th>E-MAIL</th>
	 <td><input type= "text" name ="email" value="<?php echo $data['email'];?>" required=""></td>
	 </tr>
     <tr>
	 <th>Phone Number</th>
	 <td><input type= "number" name="phno" value="<?php echo $data['phno'];?>" required=""></td>
	 </tr>
	 <tr>
	 <th>Date Of Birth</th>
	 <td><input type= "date" name="dob" value="<?php echo $data['dob'];?>" required=""></td>
	 </tr>
	 <tr>
	 <th>City</th>
	 <td><input type= "text" name="city" value="<?php echo $data['city'];?>" required=""></td>
	 </tr>
	 <th>State</th>
	 <td><input type= "text" name="state" value="<?php echo $data['state'];?>" required=""></td>
	 </tr>
	 <th>Customer Address</th>
	 <td><textarea rows="4" cols="20" name="add" required> Enter Address here.....</textarea> </td>
	 </tr>
	 <th>Customer Pin Code</th>
	 <td><input type= "text" name="pincode" value="<?php echo $data['pincode'];?>" required=""></td>
	 </tr>
     <tr>
	 <th>Image</th>
	 <td><input type= "file" name ="simg" required></td>
	 </tr>
	 <tr>
	 <td colspan = "2" ALIGN="CENTER">
	 <input type = "hidden" name="sid" value= "<?php echo $data['id'];?>">
	 <input type="submit" name="submit" value="Submit"></td>
	 </tr>


</table>
</form>