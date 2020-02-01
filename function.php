<?php
function showdetails($id,$phno)
{
	include('dbcon.php');
	$sql="SELECT * FROM `customer` WHERE `id`='$id' AND `phno`='$phno'";
	$run=mysqli_query($con,$sql);
	if(mysqli_num_rows($run)>0)
	{
		$data=mysqli_fetch_assoc($run);
		?>
		<table border="1" style="width:50%; margin-top:20px;" align = "center">
		<tr>
		    <th colspan="3">Customer Details</th>
		</tr>
		<tr>
		    <td rowspan = "7"><img src ="images/<?php echo $data['image'];?>" style = "max-height:400px;max-width:300px; padding-left:30px;"/></td>
		    <th>Name</th>
			<td><?php echo $data['name'];?></td>
		</tr>
		<tr>
		    <th>Phone Number</th>
			<td><?php echo $data['phno'];?></td>
		</tr>
		<tr>
		    <th>E-mail</th>
			<td><?php echo $data['email'];?></td>
		</tr>
		<tr>
		    <th>City</th>
			<td><?php echo $data['city'];?></td>
		</tr>
				<tr>
		    <th>State</th>
			<td><?php echo $data['state'];?></td>
		</tr>
		<tr>
		    <th>Pin Code</th>
			<td><?php echo $data['pincode'];?></td>
		</tr>
		<tr>
		<th>Add Booking</th>
	    <td><a href="booking.php">Add Booking</a></td>
		</tr>
		</table>
		<?php
	}
	else
	{
		echo "<script>alert('No Student Found');</script>";
	}
}
?>