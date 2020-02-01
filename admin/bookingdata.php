<?php

include('../dbcon.php');
	$name= $_POST['name'];
	$amount= $_POST['amount'];
	$bookingdate= $_POST['bookingdate'];
	$delieverydate= $_POST['delieverydate'];
	$description= $_POST['description'];
	$qry="UPDATE `booking` SET `name`='$name',`amount`='$amount',`bookingdate`='$bookingdate',`delieverydate`='$delieverydate'
        	WHERE `id`='$id'";
		  $run= mysqli_query($con,$qry);
		  if($run==true)
		    {
			    ?>
			    <script type="text/javascript">
	                alert('Data Updated Successfully!!');
		            window.open('bookingform.php?sid<?php echo $id;?>', '_self');
		        </script>
		        <?php
	        }
  

?>
