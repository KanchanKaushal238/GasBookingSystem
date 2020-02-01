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
<font color="white"><center><h2><U>ADD CUSTOMER</U></center></H2></FONT>
<form method = "post" action = "addcustomer.php" enctype="multipart/form-data">
    <table border="1" align = "center" style = "width:70%; margin-top:40px;">

        <tr>
	        <th>Customer Name</th>
	        <td><input type= "text" name ="name" placeholder="Enter Name" required></td>
	    </tr>
	    <tr>
	        <th>Customer ID Number</th>
	    <td><input type= "text" name ="id" placeholder="Enter Id" required></td>
	    </tr>
        <tr>
	        <th>Gender</th>
		    <td>
		        <select name ="gender" required>
			    <option value ="m">M</option>
			    <option value ="f">F</option>
			    <option value ="other">other</option>
           </td>
	    </tr>
        <tr>
	        <th>E-MAIL</th>
	        <td><input type= "text" name ="email" placeholder="Enter email" required></td>
	    </tr>
        <tr>
	        <th>Phone Number</th>
	        <td><input type= "number" name="phno" placeholder="Enter contact number" required></td>
	    </tr>
	    <tr>
	        <th>Date Of Birth</th>
	        <td><input type= "date" name="dob" placeholder="Enter date of birth" required></td>
	    </tr>
	    <tr>
	        <th>City</th>
	        <td><input type= "text" name="city" placeholder="Enter City" required></td>
	    </tr>
		<tr>
	        <th>State</th>
	        <td><input type= "text" name="state" placeholder="Enter state" required></td>
		</tr>
	        <th>Customer Address</th>
	        <td><textarea rows="4" cols="20" name="add" required> Enter Address here.....</textarea> </td>
	    </tr>
	        <th>Customer Pin Code</th>
	        <td><input type= "text" name="pincode" placeholder="Enter Pin Code" required></td>
		</tr>
        <tr>
	        <th>Image</th>
	        <td><input type= "file" name ="simg" required></td>
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
	    $id= $_POST['id'];
	    $gender= $_POST['gender'];
	    $email= $_POST['email'];
	    $phno= $_POST['phno'];
	    $dob= $_POST['dob'];
	    $city= $_POST['city'];
	    $state= $_POST['state'];
	    $add= $_POST['add'];
	    $pincode= $_POST['pincode'];
	    $imagename=$_FILES['simg']['name'];
	    $tempname=$_FILES['simg']['tmp_name'];
	    $imgqy=move_uploaded_file($tempname,"../images/$imagename");
	    if($imgqy==false)
	    {
		    ?>
		    <script>
		        alert('IMAGE IS NOT Inserted IN DATABASE!!');
		    </script>
		    <?php
	    }
	    $qry="INSERT INTO `customer`(`name`, `id`, `gender`, `email`, `phno`, `dob`, `city`, `state`, `address`, `pincode`, `image`)
	          VALUES ('$name','$id','$gender','$email','$phno','$dob','$city','$state','$add','$pincode','$imagename')";
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
	    else
		{
		    echo("error:".mysqli_error($con));
	    }
	}
?>