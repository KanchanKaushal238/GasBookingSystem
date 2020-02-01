<?php

include('../dbcon.php');
	$name= $_POST['name'];
	$email= $_POST['email'];
	$phone=$_POST['phone'];
	$city= $_POST['city'];
	$state= $_POST['state'];
	$qry="UPDATE `booking` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city', `state`='$state'
        	WHERE `id`='$id'";
		  $run= mysqli_query($con,$qry);
		  if($run==true)
		    {
			    ?>
			    <script type="text/javascript">
	                alert('Data Updated Successfully!!');
		            window.open('branchform.php?sid<?php echo $id;?>', '_self');
		        </script>
		        <?php
	        }
  

?>
