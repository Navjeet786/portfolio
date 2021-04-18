<!DOCTYPE html>
<html>
<head>
	<title>table</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<h1 class="text-center text-dark">CONTACTS</h1>
	<table class="table">
		<tr class="bg-info">
			<th>id</th>
			<th>Name</th>
			<th>Email</th>
			<th>subject</th>
			<th>message</th>
			
			<th>Action</th>
		</tr>

		<?php
		include "dbcon.php";

		$data = "select * from resume";
		$query = mysqli_query($con,$data);

		


		while ($result = mysqli_fetch_array($query)) {
			?>
		
		<tr>
			
			<td><?php echo $result['id']?></td>
			<td><?php echo $result['name']?></td>
			<td><?php echo $result['email']?></td>
			<td><?php echo $result['subject']?></td>
			<td><?php echo $result['message']?></td>
			
			<td>
				<a href="resume_view.php?id=<?php echo $result['id']?>" class="btn btn-dark">view</a>
				<a href="resume_edit.php?id=<?php echo $result['id']?>" class="btn btn-warning">edit</a>
				<a href="resume_delete.php?id=<?php echo $result['id']?>" class="btn btn-danger">delete</a>
			</td>
		</tr>
	<?php
	}
	?>	
	</table>
</div>
</body>
</html>