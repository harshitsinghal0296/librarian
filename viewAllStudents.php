
<table width="795" align="center" bgcolor="pink">

	<tr align="center">
			<td colspan="6"><h2>Student Profile</h2></td>
	</tr>
	<tr align="center" bgcolor="skyblue">
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Branch</th>
		<th>Category</th>
		<th>Semester</th>
		<th>Image</th>
		
	</tr>

	<?php
	include("db.php");
	

	$get_c = "select * from `student_register` ";


	$run_c = mysqli_query($con,$get_c);

	$i=0;

	while($row_c = mysqli_fetch_array($run_c)){
		$c_id = $row_c['id'];
		$c_name = $row_c['student_name'];
		$c_email = $row_c['student_email'];
			$c_branch = $row_c['student_branch'];
		$c_category = $row_c['category'];
		$c_semester = $row_c['student_semester'];
		$c_image = $row_c['student_image'];
		$i++;
	


	?>
	<!--display data dynamiclly-->
	<tr align="center">
		<td><?php echo $i; ?></td>
		<td><?php echo $c_name; ?></td>
		<td><?php echo $c_email; ?></td>
		<td><?php echo $c_branch; ?></td>
		<td><?php echo $c_category; ?></td>
		<td><?php echo $c_semester; ?></td>
		<td><img src="../customer/customer_images/<?php echo $c_image; ?>" width="50" height="50" /></td>
		
	
	</tr>
	<?php } ?>

</table>

