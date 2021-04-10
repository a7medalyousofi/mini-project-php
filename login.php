<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>Login Page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
		<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5">
						<div class="card-header">
							<h5 class="card-title text-center">Sign In</h5>
						</div>
						<div class="card-body">
							<form action="#" method="" id="formSignInApp" class="form-signin" class="needs-validation" novalidate>
								<div class="form-label-group mb-3 mb-md-3">
									<label for="rollNumber">Roll Number</label>
									<input
										type="text"
										oninput="validateRollNumber()"
										id="rollNumber"
										class="form-control"
										placeholder="Enter Roll Number"
										maxlength="7"
										required
										autofocus
									/>
									<div class="invalid-feedback"></div>
								</div>
								<div class="form-label-group mb-3 mb-md-3">
									<label for="mobileNo">Mobile Number</label>
									<input
										oninput="validateMobile()"
										id="mobileNo"
										class="form-control"
										type="text"
										maxlength="10"
										inputmode="tel"
										placeholder="Enter Mobile Number"
										required
										autofocus
									/>
									<div class="invalid-feedback"></div>
								</div>
								<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="./js/signIn.js"></script>
	</body>
</html>
