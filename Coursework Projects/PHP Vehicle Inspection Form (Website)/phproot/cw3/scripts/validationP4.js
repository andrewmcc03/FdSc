document.addEventListener('DOMContentLoaded', function ()
{
    // Define an array of input field IDs in the desired order
    var inputFieldIds = ['reportingDriver', 'reportingDriverDate', 'reportingDriverEmpNo', 'reviewingDriver', 'reviewingDriverDate', 'reviewingDriverEmpNo', 'maintenanceDate', 'roNumbers', 'certifiedBy', 'maintenanceLocation'];
    
    // Add event listeners to reset the border color, hide error messages, and remove focus when the user starts typing
    inputFieldIds.forEach(function (inputFieldId)
    {
        var inputField = document.getElementById(inputFieldId);
        var errorMessage = document.getElementById('error' + capitaliseFirstLetter(inputFieldId));

        inputField.addEventListener('input', function ()
        {
            inputField.style.borderColor = '';
            inputField.style.borderWidth = '';
            inputField.style.outlineColor = '';
            inputField.style.outlineWidth = '';
            errorMessage.textContent = ''; // Clear error message
        });
    });

    // Form submission validation
    function validateFormP4()
    {
        // Variable to track if there are any empty fields
        var hasEmptyField = false;
        // Variable for checking if the date is valid
        var isValidDate = true;
        // Variable to track which is the first invalid field
        var firstInvalidField = null;

        for (var i = 0; i < inputFieldIds.length; i++)
        {
            var inputFieldId = inputFieldIds[i];
            var inputField = document.getElementById(inputFieldId);
            var inputValue = inputField.value.trim();
            var errorMessage = document.getElementById('error' + capitaliseFirstLetter(inputFieldId));

            if (inputValue === '')
            {
                // Set border and outline color and width for invalid fields
                inputField.style.borderColor = 'rgb(240, 18, 18)';
                inputField.style.borderWidth = '2px';
                inputField.style.outlineColor = 'rgb(240, 18, 18)';
                inputField.style.outlineWidth = '2px';

                // Set focus on the first invalid field
                if (!hasEmptyField)
                {
                    firstInvalidField = inputField;
                    inputField.focus();
                }

                // Show error message
                errorMessage.textContent = 'Please fill in this field.';
                hasEmptyField = true;
            }
            // Else IF statement to only allow dates between 01/01/1970 (as a default), and the current date
            else if (inputField.type === 'date')
            {
                // Validate date range for date fields
                var inputDate = new Date(inputValue);
                var currentDate = new Date();

                if (inputDate.getTime() < 0 || inputDate > currentDate)
                {
                    inputField.style.borderColor = 'rgb(240, 18, 18)';
                    inputField.style.borderWidth = '2px';
                    inputField.style.outlineColor = 'rgb(240, 18, 18)';
                    inputField.style.outlineWidth = '2px';
                    errorMessage.textContent = 'Please enter a date between 01/01/1970 and ' + currentDate.toLocaleDateString() + '.';
                    isValidDate = false;

                    // Set focus on the first invalid field
                    if (!firstInvalidField)
                    {
                        firstInvalidField = inputField;
                    }
                }
            }
            else
            {
                // Reset border and outline color and width, and clear error message for valid fields
                inputField.style.borderColor = '';
                inputField.style.borderWidth = '';
                inputField.style.outlineColor = '';
                inputField.style.outlineWidth = '';
                errorMessage.textContent = '';
            }
        }

        if (hasEmptyField || !isValidDate)
        {
            return false;
        }

        // Set focus on the first invalid field
        if (firstInvalidField)
        {
            firstInvalidField.focus();
        }

        return true;
    }

    // Function to capitalise the first letter of a string
    function capitaliseFirstLetter(string)
    {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    // Attach the validation function to the form submission
    var form = document.getElementById('formP4');
    form.addEventListener('submit', function (event)
    {
        if (!validateFormP4())
        {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});