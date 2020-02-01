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
	$sql="SELECT * FROM `booking` WHERE `id` = '$sid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
?>
<font color="white"><center><h2><U>Edit Booking Details</U></center></H2></FONT>
<form method = "post" action = "updatedata.php" enctype="multipart/form-data">

<table border="1" align = "center" style = "width:70%; margin-top:40px;">

     <tr>
	 <th>Customer Name</th>
	 <td><input type= "text" name ="name" value="<?php echo $data['name'];?>" required=""></td>
	 </tr>
	  <tr>
	 <tr>
	 <th>Booking Amount</th>
	 <td><input type= "text" name ="amount" value="<?php echo $data['amount'];?>" required=""></td>
	 </tr>
   
     <tr>
	 <th>Booking Date</th>
	 <td><input type= "date" name ="bookingdate" value="<?php echo $data['bookingdate'];?>" required=""></td>
	 </tr>
     <tr>
	 <th>Delivery Date</th>
	 <td><input type= "date" name="delieverydate" value="<?php echo $data['deliverydate'];?>" required=""></td>
	 </tr>
	 <tr>
	 <th>Booking Description</th>
	 <td><textarea rows = "4" cols="18" name = "description">Enter Description here.....</textarea></td>
	 </tr>

	 <tr>
	 <td colspan = "2" ALIGN="CENTER">
	 <input type = "hidden" name="sid" value= "<?php echo $data['id'];?>">
	 <input type="submit" name="submit" value="Submit"></td>
	 </tr>


</table>
</form>