<?php

include('../dbcon.php');
	
	$id=$_REQUEST['sid'];
	$qry="DELETE FROM `branch` WHERE `id`='$id';";
		  $run= mysqli_query($con,$qry);
		  if($run==true)
		  {
			?>
			<script type="text/javascript">
	            alert('Data Deleted Successfully!!');
		        window.open('branchreport.php', '_self');
		    </script>
		<?php
	}


?>