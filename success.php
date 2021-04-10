<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Application Form | Success</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="./css/style.css" />
	</head>

	<body>
		<main class="fluid-container">
			<header>
				<div class="container">
					<img src="./cdc_logo.png" alt="" />
				</div>
			</header>
			<div class="container">
				<div class="heading">
					<div class="row">
						<div class="col-12 successPage">
							<p><?php echo @$_GET['success']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</main>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="./js/app.js"></script>
	</body>
</html>
