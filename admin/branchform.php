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
	$sql="SELECT * FROM `branch` WHERE `id` = '$sid'";
	$run=mysqli_query($con,$sql);
	$data=mysqli_fetch_assoc($run);
?>
<font color="white"><center><h2><U>Edit Branch Details</U></center></H2></FONT>
<form method = "post" action = "branchdata.php" enctype="multipart/form-data">

<table border="1" align = "center" style = "width:70%; margin-top:40px;">

	 <th>Branch Name</th>
	 <td><input type= "text" name ="name" value="<?php echo $data['name'];?>" required=""></td>
	 </tr>
	 	 <tr>
	      <th>Branch E-mail</th>
		  <td><input type= "text" value="<?php echo $data['email'];?>" required="">
          </td>
	 </tr>
   
     <tr>
	 <th>Branch Phone</th>
	 <td><input type= "text" name ="phone" value="<?php echo $data['phone'];?>" required=""></td>
	 </tr>
     	 <tr>
	      <th>City</th>
		  <td>
		   <input type= "text" name ="city"value="<?php echo $data['city'];?>" required="">   
          </td>
	 </tr>
	      <tr>
	 <th>State</th>
	 <td><input type= "text" name ="state" value="<?php echo $data['state'];?>" required=""></td>
	 </tr>

	 <td colspan = "2" ALIGN="CENTER">
	 <input type = "hidden" name="sid" value= "<?php echo $data['id'];?>">
	 <input type="submit" name="submit" value="Submit"></td>
	 </tr>


</table>
</form>