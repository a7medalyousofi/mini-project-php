<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Application Form</title>
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
						<div class="col-12">
							<p>Application Form for Registration in Professional Examination</p>
						</div>
					</div>
				</div>
				<form action="actions/applicationForm.php" method="post" id="formApp" class="needs-validation" novalidate>
					<!-- Start Admission NO. -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">1. College</h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 mb-3 mb-md-3 m-lg-0">
											<small class="form-text text-muted mb-1">Collage Code</small>
											<input
												oninput="validateCollegeCode()"
												type="text"
												value=""
												maxlength="3"
												inputmode="tel"
												id="collageId"
												class="form-control"
												name="collegeCode"
												required
											/>
											<div class="invalid-feedback"></div>
										</div>
										<div class="col-md-6 mb-0">
											<small class="form-text text-muted mb-1">Roll Number</small>
											<input
												oninput="validateRollNumber()"
												id="rollNumber"
												type="text"
												class="form-control text-uppercase"
												maxlength="7"
												name="rollNumber"
												required
											/>
											<div class="invalid-feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Admission NO. -->

					<!-- Start Name -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header d-md-flex">
									<h2 class="head">2. Name</h2>
									<small class="text-muted"> ( As per the qualifying examination certificate ) </small>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="form-group col-12 col-md-4 mb-3 mb-md-3 m-lg-0">
											<small class="form-text text-muted mb-1">Student Name</small>
											<input
												oninput="validateStudentName()"
												type="text"
												class="form-control text-uppercase"
												id="studentName"
												maxlength="25"
												name="studentName"
												required
											/>
											<div class="invalid-feedback"></div>
										</div>
										<div class="form-group col-12 col-md-4 mb-3 mb-md-3 m-lg-0">
											<small class="form-text text-muted mb-1">Father's Name</small>
											<input
												oninput="validateFathertName()"
												type="text"
												class="form-control text-uppercase"
												id="fatherName"
												name="fatherName"
												required
											/>
											<div class="invalid-feedback"></div>
										</div>
										<div class="form-group col-12 col-md-4 mb-0">
											<small class="form-text text-muted mb-1">Mother's Name (Optional)</small>
											<input type="text" class="form-control text-uppercase" id="motherName"  name="motherName" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Name -->

					<!-- Start Photo -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header d-md-flex">
									<h2 class="head">3. Photo</h2>
									<small class="text-muted"> ( File type .jpeg or .jpg , File size < 1MB ) </small>
								</div>
								<div class="card-body">
									<div class="custom-file mb-0">
										<input onchange="validateImage()" type="file" class="custom-file-input" id="customFile" name="image" required />
										<label class="custom-file-label" for="customFile">Upload your photo</label>
										<div class="invalid-feedback"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Photo -->

					<!-- Start Courses -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">3. Courses</h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="form-group col-md-6 mb-3 mb-md-3 m-lg-0">
											<small class="form-text text-muted mb-1"> Course </small>
											<select onchange="validateCousre()" id="inputCourse" name="course" class="form-control" required>
												<option value="">Select ...</option>
												<option value="B.Tech">B.Tech</option>
												<option value="M.Tech">M.Tech</option>
												<option value="B.Pharma">B.Pharma</option>
											</select>
											<div class="invalid-feedback"></div>
										</div>
										<div class="form-group col-md-6 mb-0">
											<small class="form-text text-muted mb-1">Combination</small>
											<select id="inputCombination" name="inputCombination" class="form-control" required>
											<option value="">Select ...</option>
												<option value="1" selected>CSE</option>
												<option value="M.Tech">M.Tech</option>
												<option value="B.Pharma">B.Pharma</option>
											</select>
											<div class="invalid-feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Courses -->

					<!-- Start Gender -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">4. Gender</h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="form-group col mb-0">
											<div class="d-flex">
												<div class="form-check">
													<input
														onchange="validateGender()"
														class="form-check-input"
														type="radio"
														name="gender"
														id="maleRadios"
														value="Male"
													/>
													<label class="form-check-label" for="maleRadios">Male</label>
													<input
														onchange="validateGender()"
														class="form-check-input ml-4"
														type="radio"
														name="gender"
														id="femaleRadios"
														value="Female"
													/>
													<label class="form-check-label ml-5" for="femaleRadios">Female</label>
													<div class="invalid-feedback"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Gender -->

					<!-- Start Social Status -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">5. Social State</h2>
								</div>
								<div class="card-body">
									<ul id="social_state" class="grid-container">
										<li class="form-check">
											<input
												onchange="radioState()"
												class="form-check-input"
												type="radio"
												name="socialState"
												id="gridRadios3"
												value="SC"
											/>
											<label class="form-check-label" for="gridRadios3"> SC </label>
										</li>
										<li class="form-check">
											<input
												onchange="radioState()"
												class="form-check-input"
												type="radio"
												name="socialState"
												id="gridRadios4"
												value="BC-C"
											/>
											<label class="form-check-label" for="gridRadios4"> BC-C </label>
										</li>
										<li class="form-check">
											<input
												onchange="radioState()"
												class="form-check-input"
												type="radio"
												name="socialState"
												id="gridRadios5"
												value="ST"
											/>
											<label class="form-check-label" for="gridRadios5"> ST </label>
										</li>
										<li class="form-check">
											<input
												onchange="radioState()"
												class="form-check-input"
												type="radio"
												name="socialState"
												id="gridRadios6"
												value="EC-D"
											/>
											<label class="form-check-label" for="gridRadios6"> EC-D </label>
										</li>
										<li class="form-check">
											<input
												onchange="radioState()"
												class="form-check-input"
												type="radio"
												name="socialState"
												id="gridRadios7"
												value="BC-A"
											/>
											<label class="form-check-label" for="gridRadios7"> BC-A </label>
										</li>
										<li class="form-check">
											<input
												onchange="radioState()"
												class="form-check-input"
												type="radio"
												name="socialState"
												id="gridRadios8"
												value="BC-E"
											/>
											<label class="form-check-label" for="gridRadios8"> BC-E </label>
										</li>
										<li class="form-check">
											<input
												onchange="radioState()"
												class="form-check-input"
												type="radio"
												name="socialState"
												id="gridRadios9"
												value="BC-B"
											/>
											<label class="form-check-label" for="gridRadios9"> BC-B </label>
										</li>
										<li class="form-check">
											<input
												onchange="radioState()"
												class="form-check-input"
												type="radio"
												name="socialState"
												id="gridRadios10"
												value="Others"
											/>
											<label class="form-check-label" for="gridRadios10"> Others </label>
										</li>
										<div class="invalid-feedback"></div>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- End Social Status -->

					<!-- Start Address -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">6. Address</h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="form-group col-12 mb-3">
											<small class="form-text text-muted mb-1">House No.</small>
											<input type="text" class="form-control"  name="address_one" id="address_one" required />
											<div class="invalid-feedback"></div>
										</div>
										<div class="form-group col-12 mb-3">
											<small class="form-text text-muted mb-1">ٍStreet</small>
											<input type="text" class="form-control" name="address_two" id="address_two" required />
											<div class="invalid-feedback"></div>
										</div>
									</div>
									<div class="row">
										<div class="form-group col-md-4 mb-md-0 md-3">
											<small class="form-text text-muted mb-1">City/District</small>
											<input type="text" class="form-control" id="city" name="city" required />
											<div class="invalid-feedback"></div>
										</div>
										<div class="form-group col-md-4 mb-md-0 md-3">
											<small class="form-text text-muted mb-1">State</small>
											<input type="text" class="form-control" id="state" name="state" required />
											<div class="invalid-feedback"></div>
										</div>
										<div class="form-group col-md-4 mb-0">
											<small class="form-text text-muted mb-1">Zip / Pin Code</small>
											<input type="text" class="form-control" id="pinCode" name="pinCode" required />
											<div class="invalid-feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Address -->

					<!-- Start Contact -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">7. Contact</h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 mb-md-0 mb-3">
											<small class="form-text text-muted mb-1">Email Address</small>
											<input oninput="validateEmail()" id="email" name="email" type="text" class="form-control" required />
											<div class="invalid-feedback"></div>
										</div>
										<div class="col-md-6 mb-0">
											<small class="form-text text-muted mb-1">Mobile Number ( Without Country Code )</small>
											<input
												oninput="validateMobile()"
												id="mobileNo"
												name="mobileNo"
												class="form-control"
												type="text"
												maxlength="10"
												inputmode="tel"
												required
											/>
											<div class="invalid-feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Contact -->

					<!-- Start DOB -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">8. Date of Birth</h2>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="form-group col mb-md-0 mb-0">
											<small class="form-text text-muted mb-1">DOB Format ( Month/Day/Year )</small>
											<input type="date" class="form-control" id="dob" name="dob" required />
											<div class="invalid-feedback"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End DOB -->

					<!-- Start Appearing -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">9. Appearing</h2>
								</div>
								<div class="card-body">
									<div class="appearing-container">
										<div class="year">
											<div class="yearDesc">
												<small class="form-text text-muted mb-1">Year of Appearing</small>
											</div>
											<div class="yearRatio">
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="yearofAppearing"
														id="yearRadio1"
														value="Fisrt Year"
													/>
													<label class="form-check-label" for="yearRadio1">I</label>
												</div>
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="yearofAppearing"
														id="yearRadio2"
														value="Second Year"
													/>
													<label class="form-check-label" for="yearRadio2">II</label>
												</div>
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="yearofAppearing"
														id="yearRadio3"
														value="Third Year"
													/>
													<label class="form-check-label" for="yearRadio3">III</label>
												</div>
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="yearofAppearing"
														id="yearRadio4"
														value="Forth Year"
													/>
													<label class="form-check-label" for="yearRadio4">IV</label>
												</div>
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="yearofAppearing"
														id="yearRadio5"
														value="Fifth Year"
													/>
													<label class="form-check-label" for="yearRadio5">V</label>
												</div>
											</div>
										</div>
										<div class="semester">
											<div class="semDesc">
												<small id="dob" class="form-text text-muted mb-1">Semester of Appearing</small>
											</div>
											<div class="semRatio">
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="semofAppearing"
														id="semRadio1"
														value="First Semester"
													/>
													<label class="form-check-label" for="semRadio1">I</label>
												</div>
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="semofAppearing"
														id="semRadio2"
														value="Second Semester"
													/>
													<label class="form-check-label" for="semRadio2">II</label>
												</div>
											</div>
										</div>
										<div class="appearing">
											<div class="appDesc">
												<small id="dob" class="form-text text-muted mb-1">Appearing As</small>
											</div>
											<div class="appRatio">
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="appearingAs"
														id="appRadio1"
														value="Regular"
													/>
													<label class="form-check-label" for="appRadio1">Regular</label>
												</div>
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="appearingAs"
														id="appRadio2"
														value="External"
													/>
													<label class="form-check-label" for="appRadio2">External</label>
												</div>
												<div class="form-check">
													<input
														class="form-check-input"
														type="radio"
														name="appearingAs"
														id="appRadio3"
														value="Improvement"
													/>
													<label class="form-check-label" for="appRadio3">Improvement</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Appearing -->

					<!-- Start Subject -->
					<div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header">
									<h2 class="head">10. Subjects</h2>
								</div>
								<div class="card-body">
									<div class="theory">
										<small class="form-text text-muted mb-1"> Theory </small>
										<div class="row">
											<div class="col-4 col-md-2 mb-3 mb-md-0">
												<input type="text" class="form-control" id="theoryOne" name="theoryOne" maxlength="3" />
											</div>
											<div class="col-4 col-md-2 mb-3 mb-md-0">
												<input type="text" class="form-control" id="theoryTwo" name="theoryTwo" maxlength="3" />
											</div>
											<div class="col-4 col-md-2 mb-3 mb-md-0">
												<input type="text" class="form-control" id="theoryThree" name="theoryThree" maxlength="3" />
											</div>
											<div class="col-4 col-md-2">
												<input type="text" class="form-control" id="theoryFour" name="theoryFour" maxlength="3" />
											</div>
											<div class="col-4 col-md-2">
												<input type="text" class="form-control" id="theoryFive" name="theoryFive" maxlength="3" />
											</div>
											<div class="col-4 col-md-2">
												<input type="text" class="form-control" id="theorySix" name="theorySix" maxlength="3" />
											</div>
										</div>
									</div>
									<div class="practical mt-3">
										<small class="form-text text-muted mb-1">Practical</small>
										<div class="row">
											<div class="col-4 col-md-2 mb-3 mb-md-0">
												<input type="text" class="form-control" id="practicalOne" name="practicalOne" maxlength="3" />
											</div>
											<div class="col-4 col-md-2 mb-3 mb-md-0">
												<input type="text" class="form-control" id="practicalTwo" name="practicalTwo" maxlength="3" />
											</div>
											<div class="col-4 col-md-2 mb-3 mb-md-0">
												<input type="text" class="form-control" id="practicalThree" name="practicalThree" maxlength="3" />
											</div>
											<div class="col-4 col-md-2">
												<input type="text" class="form-control" id="practicalFour" name="practicalFour" maxlength="3" />
											</div>
											<div class="col-4 col-md-2">
												<input type="text" class="form-control" id="practicalFive" name="practicalFive" maxlength="3" />
											</div>
											<div class="col-4 col-md-2">
												<input type="text" class="form-control" id="practicalSix" name="practicalSix" maxlength="3" />
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End Subject -->

					<div class="mb-5 pt-2 d-flex justify-content-start">
						<button id="submitBtn" name="submitBtn" class="btn btn-primary btn-lg px-5" type="submit">Submit</button>
					</div>

					<!-- <div class="row">
						<div class="col">
							<div class="card">
								<div class="card-header"></div>
								<div class="card-body"></div>
							</div>
						</div>
					</div> -->
				</form>
				<!-- <button onclick="getCourseName()">Get Courses</button> -->
			</div>
		</main>

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="./js/app.js"></script>
	</body>
</html>
