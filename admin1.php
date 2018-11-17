<?php 
require 'admin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> E-Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="text-right bg-dark px-2 d-block ">
			<a href="index.php" class="small text-light">User area</a>
		</div>

		<h1 class="bg-info text-white text-center p-5"> E - S H O P admin area</h1>
		<div class="row p-1 header mb-1">
			<table class="table">
				<thead>
					<th scope="col"> ID </th>
					<th scope="col"> Title </th>
					<th scope="col"> Description </th>
					<th scope="col"> Price </th>
					<th scope="col"> DEL </th>

				</thead>
				<tbody>
					<?php
					foreach ($products as $product) {
						echo "<tr>
						<td>".$product['ID']."</td> 
						<td>".$product['Title']."</td>
						<td>".$product['Description']."</td>
						<td>".$product['Price']."</td>
						<td>"."<a href='admin1.php?delete=".$product['ID']."'>Delete</a>"."</td>
						</tr>";				
					}
					?>
				</tbody>	
			</table>
		
		</div>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">ADD</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-sm">
			</div>
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Enter your product</h4>
				</div>
				<div class="modal-body">
					<form action="admin1.php" method="post" >
						<label for="Title">Title</label>
						<input type="text" name="Title"> 
						<label for="Description">Description</label>
						<input type="text" name="Description"> 
						<label for="Price">Price</label>
						<input type="text" name="Price"> 
						<button type="submit" class="btn btn-info" value="submit" name="submit">Submit </button> 
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>

</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>