
<?php
    include('header.php');
	include('titlehead1.php');
?> 
<form method = "post" action = "booking.php">
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
	 <td><input type= "date" name="deliverydate" placeholder="Enter Delivery Date" required></td>
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
	include('dbcon.php');
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
		alert('Booking Is Done!!');
		</script>
		<?php
	}
	else{
		echo("error:".mysqli_error($con));
	    }
		
}
?>