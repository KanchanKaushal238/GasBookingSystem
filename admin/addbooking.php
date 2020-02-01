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
<font color="white"><center><h2><U>ADD BOOKING</U></center></H2></FONT>
<form method = "post" action = "addbooking.php">
<table border="1" align = "center" style = "width:70%; margin-top:40px;">

     <tr>
	 <th>Customer Name</th>
	 <td><input type= "text" name ="name" placeholder="Enter Name" required></td>
	 </tr>
	 <tr>
	 <th>Booking Amount</th>
	 <td><input type= "text" name ="amount" placeholder="Enter Amount" required></td>
	 </tr>
   
     <tr>
	 <th>Booking Date</th>
	 <td><input type= "date" name ="bookingdate" placeholder="Enter Date" required></td>
	 </tr>
     <tr>
	 <th>Delievery Date</th>
	 <td><input type= "date" name="delieverydate" placeholder="Enter Delievery Date" required></td>
	 </tr>
	 <tr>
	 <th>Booking Description</th>
	 <td><textarea rows = "4" cols="18" name = "description">Enter Description here.....</textarea></td>
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
	$amount= $_POST['amount'];
	$bookingdate= $_POST['bookingdate'];
	$delieverydate= $_POST['delieverydate'];
	$description= $_POST['description'];
	
	$qry="INSERT INTO `booking`(`name`, `amount`, `bookingdate`, `deliverydate`, `description`) 
	      VALUES ('$name','$amount','$bookingdate', '$delieverydate','$description')";
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