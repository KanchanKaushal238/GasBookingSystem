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
<font color="white"><center><h2><U>ADD CONNECTION</U></center></H2></FONT>
<form method = "post" action = "addconnection.php">
    <table border="1" align = "center" style = "width:70%; margin-top:40px;">
        <tr>
	        <th>Customer Name</th>
	        <td><input type= "text" name ="name" placeholder="Enter Name" required></td>
	    </tr>
	 	<tr>
	        <th>Select Branch</th>
		    <td>
		        <select name ="branch" required>
			    <option value ="1">Tucs Limited, Chennai, Tamil Nadu</option>
			    <option value ="2">Indane Gas-Anbu Gas Agency, Chennai, Tamil Nadu</option>
			    <option value ="3">Indraprsth Gas Limited,New Delhi</option>
			    <option value ="4">Mahanagar Gas Limited, Mumbai</option>
			    <option value ="5">Indane Gas Agency, Chattisgarh</option>
            </td>
	    </tr>
        <tr>
	        <th>Connection Date</th>
	        <td><input type= "date" name ="connectiondate" placeholder="Enter Date" required></td>
	    </tr>
     	<tr>
	        <th>Number Of Cylinder</th>
		    <td>
		        <select name ="noofcylinder" required>
			    <option value ="1">1</option>
			    <option value ="2">2</option>
			    <option value ="3">3</option>
			    <option value ="4">4</option>
			    <option value ="5">5</option>
			    <option value ="6">6</option>
			    <option value ="7">7</option>
			    <option value ="8">8</option>
			    <option value ="9">9</option>
			    <option value ="10">10</option>
			    <option value ="11">11</option>
			    <option value ="12">12</option>
            </td>
	    </tr>
	    <tr>
	        <th>Connection Cost</th>
	        <td><input type= "text" name ="connectioncost" placeholder="enter cost" required></td>
	    </tr>
		<tr>
	        <th>Address</th>
	        <td><textarea rows = "4" cols="18" name = "address">Enter Address here.....</textarea></td>
	    </tr>
	    <tr>
	        <th>Description</th>
	        <td><textarea rows = "4" cols="18" name = "description">Enter Description here.....</textarea></td>
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
	    $branch= $_POST['branch'];
	    $noofcylinder=$_POST['noofcylinder'];
	    $connectiondate= $_POST['connectiondate'];
	    $connectioncost= $_POST['connectioncost'];
	    $address= $_POST['address'];
	    $description= $_POST['description'];
	    $qry="INSERT INTO `connection`(`name`, `branch`, `connectiondate`, `noofcylinder`, `connectioncost`, `address`, `description`)
        	  VALUES ('$name', '$branch', '$connectiondate', '$noofcylinder', '$connectioncost', '$address', '$description')";
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