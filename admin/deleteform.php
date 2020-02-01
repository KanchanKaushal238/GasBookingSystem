<?php

include('../dbcon.php');
	
	$id=$_REQUEST['sid'];
	$qry="DELETE FROM `customer` WHERE `id`='$id';";
		  $run= mysqli_query($con,$qry);
		  if($run==true)
		  {
			?>
			<script type="text/javascript">
	            alert('Data Deleted Successfully!!');
		        window.open('customerreport.php', '_self');
		    </script>
		<?php
	}


?>