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
<font color="white"><center><h2><U>BOOKING REPORT</U></center></H2></FONT>
<table align = "center">
<form action="bookingreport.php" method = "post" >
    <tr>
	   <th>Customer Id</th>
	   <td> <input type = "number" name = "id" placeholder="Enter ID" required="required"/> </td>
	
    <th>Customer Name</th>
	<td>
	<input type = "text" name = "name" placeholder="Enter Name" required="required"/> </td>
    </tr>
	<td colspan = "2" align = "center"><input type = "submit" name = "submit" value= "Search"/></td>
</form>
</table>
<table align= "center" width = "80%" border="1" style= "margin_top:10px;">
    <tr style="background-color:#000; color:#fff;">
	<th>No</th>
	<th>Customer Name</th>
	<th>Booking Amount</th>
	<th>Booking Date</th>
	<th>Delivery Date</th>
	<th>Booking Description</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>
	<?php
     if(isset($_POST['submit']))
	 {
		include('../dbcon.php');
		
		$id=$_POST['id'];
		$name= $_POST['name'];
		
		$sql="SELECT * FROM `booking` WHERE `id`='$id' AND `name` LIKE '%$name%'";
		$run = mysqli_query($con, $sql);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "<tr><td colspan='5'>No Records Found</td></tr>";
		}
		else
		{
			$count=0;
			while($data = mysqli_fetch_assoc($run))
			{
				$count++;
				?>
				
				<tr align = "center">
	               <td><?php echo $count;?></td>
	               <td><?php echo $data['name'];?></td>
	               <td><?php echo $data['amount'];?></td>
				   <td><?php echo $data['bookingdate'];?></td>
				   <td><?php echo $data['deliverydate'];?></td>
				   <td><?php echo $data['description'];?></td>
	               <td><a href="bookingform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
				   <td><a href="bookingdelete.php?sid=<?php echo $data['id'];?>">Delete</a></td>
				   
	            </tr>
	  
				
				
				<?php
			}
		}
	 }
    ?>
</table>
