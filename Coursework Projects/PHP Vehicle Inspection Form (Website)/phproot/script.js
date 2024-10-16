function validateForm()
{
    // Get form inputs
    var username = document.forms["registrationForm"]["username"].value;
    var email = document.forms["registrationForm"]["email"].value;
    var password = document.forms["registrationForm"]["password"].value;
    var confirmPassword = document.forms["registrationForm"]["confirm_password"].value;

    // Simple validation for username (at least 3 characters)
    if (username.length < 3)
    {
        alert("Username must be at least 3 characters");
        return false;
    }

    // Basic email validation
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email))
    {
        alert("Invalid email address");
        return false;
    }

    // Password validation (at least 6 characters)
    if (password.length < 6)
    {
        alert("Password must be at least 6 characters");
        return false;
    }

    // Confirm password match
    if (password !== confirmPassword)
    {
        alert("Passwords do not match");
        return false;
    }

    // If all validations pass, the form is valid
    return true;
}