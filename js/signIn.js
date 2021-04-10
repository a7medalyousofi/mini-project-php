const form_sign_in_app = document.getElementById('formSignInApp');
const rollNumber = document.getElementById('rollNumber');
const mobile = document.getElementById('mobileNo');

form_sign_in_app.addEventListener('submit', e => {
    let isValid =
        validateRollNumber() === true &&
        validateMobile() === true;

    if (isValid === true) {
        return true
    } else {
        e.preventDefault();
    }
});

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

// Set Error Message
function setErrorMsg(input, message) {
    let inputParent = input.parentNode;
    let errorMsg = inputParent.querySelector('.invalid-feedback');
    input.classList.add('is-invalid');
    errorMsg.innerText = message;
}