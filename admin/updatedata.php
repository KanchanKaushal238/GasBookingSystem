<?php

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
	move_uploaded_file($tempname,"../images/$imagename");
	
	$qry="UPDATE `customer` SET `name`='$name',`gender`='$gender',`email`='$email',`phno`='$phno',`dob`='$dob',
	     `city`='$city',`state`='$state',`address`='$add',`pincode`='$pincode',`image`='$imagename' WHERE `id`='$id'";
		  $run= mysqli_query($con,$qry);
		  if($run==true)
		    {
			    ?>
			    <script type="text/javascript">
	                alert('Data Updated Successfully!!');
		            window.open('updateform.php?sid<?php echo $id;?>', '_self');
		        </script>
		        <?php
	        }
  

?>
