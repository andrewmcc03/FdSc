document.addEventListener('DOMContentLoaded', function ()
{
    // Define an array of input field IDs in the desired order
    var inputFieldIds = ['truckTractorNo', 'mileage', 'truckTractorTrailerNo', 'dollyNo', 'dollyTrailerNo', 'location'];

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
    function validateFormP1()
    {
        // Variable to track if there are any empty fields
        var hasEmptyField = false;

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
                    inputField.focus();
                }

                // Show error message
                errorMessage.textContent = 'Please fill in this field.';
                hasEmptyField = true;
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

        if (hasEmptyField)
        {
            return false;
        }

        return true;
    }

    // Function to capitalise the first letter of a string
    function capitaliseFirstLetter(string)
    {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    // Attach the validation function to the form submission
    var form = document.getElementById('formP1');
    form.addEventListener('submit', function (event)
    {
        if (!validateFormP1())
        {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    });
});