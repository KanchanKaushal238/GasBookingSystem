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
<font color="white"><center><h2><U>CUSTOMER REPORT</U></center></H2></FONT>
<table align = "center">
<form action="customerreport.php" method = "post" >
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
	<th>Image</th>
	<th>Customer Name</th>
	<th>Customer Phone</th>
	<th>Customer City</th>
	<th>E-mail</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>
	<?php
     if(isset($_POST['submit']))
	 {
		include('../dbcon.php');
		
		$id=$_POST['id'];
		$name= $_POST['name'];
		
		$sql="SELECT * FROM `customer` WHERE `id`='$id' AND `name` LIKE '%$name%'";
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
	               <td><img src="../images/<?php echo $data['image']; ?>" style="max-width:100px;"/></td>
	               <td><?php echo $data['name'];?></td>
				   <td><?php echo $data['phno'];?></td>
				   <td><?php echo $data['city'];?></td>
				   <td><?php echo $data['email'];?></td>
	               <td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
				   <td><a href="deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
				   
	            </tr>
	  
				
				
				<?php
			}
		}
	 }
    ?>
</table>
