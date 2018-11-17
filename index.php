<?php 
require 'admin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>E-shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body class="bg-warning">
	<div class="container bg-warning">
			<div class="text-right bg-dark px-2 d-block ">
				<a href="admin1.php" class="small text-light">Admin</a>
			</div>

			<div class="jumbotron mb-0 bg-secondary text-center text-light" >
				<h2>E - S H O P</h2> 				
			</div>

		<div class="row">
			
			<?php foreach ($products as $product) { ?>

				<div class='col-md-3 col-sm-6'>
						<div class='card text-center mt-1'> 
							<div class='card-block'>
								<img src='fonas.jpg' alt='' class='img-fluid'>
									<div class='card-title'
										<h4><?php echo $product['Title'] ?></h4>
									</div>
									<div class='card-text'><?= $product['Description'] ?></div>
								</div>
							</div>				
						</div>
					<?php }	?>
		</div>

	</div>

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
	</html>
