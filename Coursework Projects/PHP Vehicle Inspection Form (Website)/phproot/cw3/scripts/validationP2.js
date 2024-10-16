// Get form inputs
var truckTractorNo = document.getElementById('truckTractorNo').value.trim();
var mileage = document.getElementById('mileage').value.trim();
var truckTractorTrailerNo = document.getElementById('truckTractorTrailerNo').value.trim();
var dollyNo = document.getElementById('dollyNo').value.trim();
var dollyTrailerNo = document.getElementById('dollyTrailerNo').value.trim();
var location = document.getElementById('location').value.trim();

document.addEventListener("DOMContentLoaded", function () {
    // Add event listeners to input fields for proactive validation
    addValidationListener('truckTractorNo', 'errorTruckTractorNo');
    addValidationListener('mileage', 'errorMileage');
    addValidationListener('truckTractorTrailerNo', 'errorTruckTractorTrailerNo');
    addValidationListener('dollyNo', 'errorDollyNo');
    addValidationListener('dollyTrailerNo', 'errorDollyTrailerNo');
    addValidationListener('location', 'errorLocation');
});

function addValidationListener(fieldName, errorId) {
    var field = document.getElementById(fieldName);

    // Add event listener for blur (losing focus)
    field.addEventListener('blur', function () {
        validateField(fieldName, errorId, true);
    });
}

/* NOTE: Unused validation method as checkboxes do not need further validation here */
function validateFormP2() {
    // Reset previous error messages
    resetErrorMessages();

    var isValid = true;

    isValid = validateField('truckTractorNo', 'errorTruckTractorNo', isValid);
    isValid = validateField('mileage', 'errorMileage', isValid);
    isValid = validateField('truckTractorTrailerNo', 'errorTruckTractorTrailerNo', isValid);
    isValid = validateField('dollyNo', 'errorDollyNo', isValid);
    isValid = validateField('dollyTrailerNo', 'errorDollyTrailerNo', isValid);
    isValid = validateField('location', 'errorLocation', isValid);

    return isValid;
}

function validateField(fieldName, errorId, updateErrorMessage) {
    var field = document.getElementById(fieldName);
    var error = document.getElementById(errorId);

    // If field is empty
    if (field.value.trim() === '') {
        if (updateErrorMessage) {
            error.innerText = 'This is a required field.';
            error.style.color = 'red';
        }
        return false;
    } else {
        // Clear error message if the field is not empty
        error.innerText = '';
        return true;
    }
}

function resetErrorMessages() {
    // Reset all error messages
    var errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(function (error) {
        error.innerText = '';
    });
}