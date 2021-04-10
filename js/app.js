const formApp = document.getElementById('formApp');

const collegeCode = document.getElementById('collageId');
const rollNumber = document.getElementById('rollNumber');
const studentName = document.getElementById('studentName');
const fatherName = document.getElementById('fatherName');
const inputCourse = document.getElementById('inputCourse');
const inputCombination = document.getElementById('inputCombination');
const isMale = document.getElementById('maleRadios');
const isFemale = document.getElementById('femaleRadios');
const customFile = document.getElementById('customFile');
const socialState = document.querySelectorAll('input[name="socialState"]');
const email = document.getElementById('email');
const mobile = document.getElementById('mobileNo');
const dateOfBirth = document.getElementById('dob');



// important to check radioState() function( its not working well)

formApp.addEventListener('submit', e => {
	let isValid =
		validateCollegeCode() === true &&
		validateRollNumber() === true &&
		validateStudentName() === true &&
		validateFathertName() === true &&
		validateImage() === true &&
		validateCousre() === true &&
		validateGender() === true &&
		validateSocialState() === true &&
		validateEmail() === true &&
		validateMobile() === true &&
		validateDOB() === true;

	if (isValid === true) {
		return true
	} else {
		e.preventDefault();
	}
});

// --------------------------------------------------------------

// Set Error Message
function setErrorMsg(input, message) {
	let inputParent = input.parentNode;
	let errorMsg = inputParent.querySelector('.invalid-feedback');
	input.classList.add('is-invalid');
	errorMsg.innerText = message;
}

// --------------------------------------------------------------

// validate college code
function validateCollegeCode() {
	if (collegeCode.value.trim() === '') {
		setErrorMsg(collegeCode, `Collage code can't be empty.`);
		collegeCode.focus();
		return false;
	} else {
		if (isNaN(collegeCode.value.trim())) {
			setErrorMsg(collegeCode, 'Invalid value.');
			collegeCode.focus();
			return false;
		} else {
			if (collegeCode.value.length < 3) {
				setErrorMsg(collegeCode, 'Collage code is not valid.');
				collegeCode.focus();
				return false;
			}
		}
	}
	collegeCode.classList.remove('is-invalid');
	return true;
}

// --------------------------------------------------------------

// validate Roll Number name
function validateRollNumber() {
	if (rollNumber.value === '') {
		setErrorMsg(rollNumber, `Roll number can't be empty.`);
		rollNumber.focus();
		return false;
	} else if (rollNumber.value.length < 6) {
		setErrorMsg(rollNumber, `Roll number is not valid.`);
		rollNumber.focus();
		return false;
	}
	rollNumber.classList.remove('is-invalid');
	return true;
}

// --------------------------------------------------------------

// validate student name
function validateStudentName() {
	if (studentName.value === '') {
		setErrorMsg(studentName, `Student name can't be empty.`);
		studentName.focus();
		return false;
	} else if (studentName.value.match(/[\d]+/)) {
		setErrorMsg(studentName, `Student name can't contain number.`);
		studentName.focus();
		return false;
	} else if (studentName.value.length < 3) {
		setErrorMsg(studentName, `Student name must be greterthan 2 charecter.`);
		studentName.focus();
		return false;
	}
	studentName.classList.remove('is-invalid');
	return true;
}

// --------------------------------------------------------------

// validate father name
function validateFathertName() {
	if (fatherName.value === '') {
		setErrorMsg(fatherName, `Father name can't be empty.`);
		fatherName.focus();
		return false;
	} else if (fatherName.value.match(/[\d]+/)) {
		setErrorMsg(fatherName, `Father name can't contain number.`);
		fatherName.focus();
		return false;
	} else if (fatherName.value.length < 3) {
		setErrorMsg(fatherName, `Father name must be greterthan 2 charecter.`);
		fatherName.focus();
		return false;
	}
	fatherName.classList.remove('is-invalid');
	return true;
}

// --------------------------------------------------------------

function validation(inputId, eleId, valueLen, startInvalidMsg) {
	var inputId = document.getElementById(eleId);
	let errorMsg = inputId.parentNode.querySelector('.invalid-feedback');
	if (inputId.value.trim() === '') {
		inputId.classList.add('is-invalid');
		errorMsg.innerText = `${startInvalidMsg} can't be empty.`;
		inputId.value = '';
		return false;
	} else {
		if (inputId.value.length < valueLen) {
			inputId.classList.add('is-invalid');
			errorMsg.innerText = `${startInvalidMsg} is not valid.`;
			return false;
		}
	}
	inputId.classList.remove('is-invalid');
	return true;
}

// --------------------------------------------------------------

// Upload validation
function validateImage() {
	let fileLabel = document.querySelector('.custom-file-label');
	let imgErrorMsg = customFile.parentNode.querySelector('.invalid-feedback');
	let validExtentions = ['jpg', 'jpeg'];

	if (customFile.value != '') {
		//get posation of Dot
		let posOfDot = customFile.value.lastIndexOf('.') + 1;
		let imgExtention = customFile.value.substring(posOfDot);
		let result = validExtentions.includes(imgExtention);

		// check for file extention
		if (result == false) {
			customFile.classList.add('is-invalid');
			setErrorMsg(customFile, `File type ( .${imgExtention} ) is not valid.`);
			fileLabel.innerHTML = 'Upload your photo';
			customFile.focus();
			return false;
		} else {
			if (parseFloat(customFile.files[0].size / (1024 * 1024)) > 1) {
				customFile.classList.add('is-invalid');
				setErrorMsg(customFile, `File size must be smaller than 1MB.`);
				fileLabel.innerHTML = 'Upload your photo';
				customFile.focus();
				return false;
			}
		}
		customFile.classList.remove('is-invalid');
	} else {
		customFile.classList.add('is-invalid');
		setErrorMsg(customFile, `please upload your photo.`);
		customFile.focus();
		return false;
	}
	fileLabel.innerHTML = `Selected file : ${customFile.value.replace(/.*[\/\\]/, '')}`;
	return true;
}

// --------------------------------------------------------------

// Mobile Validation
function validateMobile() {
	let mobilePattern = /[7-9]\d{9}/

	if (mobile.value.match(mobilePattern)) {
		mobile.classList.remove('is-invalid');
		return true
	} else if (mobile.value === '') {
		mobile.classList.add('is-invalid');
		setErrorMsg(mobile, `Mobile number can't be empty.`);
		mobile.focus();
		return false
	} else {
		mobile.classList.add('is-invalid');
		setErrorMsg(mobile, `Mobile number is not valid.`);
		mobile.focus();
		return false
	}
}

// --------------------------------------------------------------

// Email Validation
function validateEmail() {
	let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

	if (email.value.match(pattern)) {
		email.classList.remove('is-invalid');
		return true
	} else if (email.value === '') {
		email.classList.add('is-invalid');
		setErrorMsg(email, `Email Address can't be empty.`);
		email.focus();
		return false
	} else {
		email.classList.add('is-invalid');
		setErrorMsg(email, `Email Address is not valid.`);
		email.focus();
		return false
	}
}

// --------------------------------------------------------------
// 	Course vaildation
const courseInput = document.getElementById('inputCourse');
validateCousre = () => {
	if (courseInput.value === '') {
		courseInput.classList.add('is-invalid');
		setErrorMsg(courseInput, `Please select course name.`);
		courseInput.focus();
		return false;
	} else {
		courseInput.classList.remove('is-invalid');
		return true;
	}
};

// Courses Selection
var courses = {
	'B.Tech': ['CSE', 'ECE', 'EEE', 'CE', 'MC'],
	'M.Tech': ['ECE', 'CSE', 'EEE', 'CE', 'MC'],
	'B.Pharma': ['PA', 'PC']
	// PA = Pharmaceutical Analysis
	// PC = Pharmaceutical Chemistry
};

inputCourse.addEventListener('change', function (e) {
	// Getting the selected value
	var selectedOption = courses[e.target.value];
	// Removing the Combination options using while loop
	while (inputCombination.options.length > 0) {
		inputCombination.options.remove(0);
	}
	if (selectedOption != undefined) {
		// using Option constructor ( it will create HTML element with the given value and innerText)
		selectedOption.forEach(function (el) {
			let option = new Option(el, el);
			// Append the child option in the Combination
			inputCombination.appendChild(option);
		});
	}
});

// --------------------------------------------------------------
// Gender validation
function validateGender() {
	if ((isMale.checked || isFemale.checked) == false) {
		isFemale.classList.add('is-invalid');
		isMale.classList.add('is-invalid');
		setErrorMsg(isMale, `Please select your gender.`);
		isMale.focus();
		return false;
	}
	isFemale.classList.remove('is-invalid');
	isMale.classList.remove('is-invalid');
	return true;
}

// --------------------------------------------------------------
// social state radio validation
function validateSocialState() {
	let valid = true;
	let a = false;

	for (let i = 0; i < socialState.length; i++) {
		let checkedInput = socialState[i].checked
		if (checkedInput == true) {
			a = true
		}
		socialState[i].classList.remove('is-invalid')
	}
	if (a === false) {
		for (let i = 0; i < socialState.length; i++) {
			let checkedInput = socialState[i].checked
			if (checkedInput == true) {
				for (i = 0; i < socialState.length; i++) {
					socialState[i].classList.remove('is-invalid')
				}
				break
			} else {
				socialState[i].classList.add('is-invalid')
				socialState[0].focus()
				valid = false
			}
		}
	}
	return valid
}

// --------------------------------------------------------------
// Date of Birth validation
function validateDOB() {
	//Get the date from the TextBox.
	let dateString = dateOfBirth.value;
	// Year - Month - Day
	let regex = /^(19|20)\d{2}\-(0[1-9]|1[0-2])\-(0[1-9]|1\d|2\d|3[01])$/;
	console.log(dateString)
	//Check whether Date Format MM/DD/YYYY is valid.
	if (regex.test(dateString)) {
		let parts = dateString.split("-");
		let dtDOB = new Date(parts[0] + "-" + parts[1] + "-" + parts[2]);
		let currentDate = new Date();
		console.log(dtDOB)
		if ((currentDate.getFullYear() - dtDOB.getFullYear()) < 18) {
			setErrorMsg(dateOfBirth, `Eligibility 18 Years.`);
			dateOfBirth.focus()
			return false;
		}

		if ((currentDate.getFullYear() - dtDOB.getFullYear()) == 18) {
			//Current Date: 11/06/2018 and DOB: 15/07/2000. Will turned 18 on 15/07/2018.
			if (currentDate.getMonth() < dtDOB.getMonth()) {
				return false;
			}
			if (currentDate.getMonth() == dtDOB.getMonth()) {
				//Current Date:: 11/06/2018 and DOB: 15/06/2000. Will turned 18 on 15/06/2018.
				if (currentDate.getDate() < dtDOB.getDate()) {
					return false;
				}
			}
		}
		dateOfBirth.classList.remove('is-invalid');
		return true;
	} else {
		setErrorMsg(dateOfBirth, `Enter date in MM/DD/YYYY format.`);
		dateOfBirth.focus()
		return false;
	}
}