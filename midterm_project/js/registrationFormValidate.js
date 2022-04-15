//registrationFormValidate.js

function registrationFormValidate()
{
    var loginForm = document.getElementById('registrationForm');
    
    var firstNameBlank = loginForm.firstName.value == null ||
                    loginForm.firstName.value == "";
    
    var lastNameBlank = loginForm.lastName.value == null ||
                        loginForm.lastName.value == "";

    var emailBlank = loginForm.email.value == null ||
                    loginForm.email.value == "";

    var passwordBlank = loginForm.password.value == null ||
                        loginForm.password.value == "";

    var somethingBlank = firstNameBlank || lastNameBlank || emailBlank || passwordBlank;

    if (somethingBlank)
        alert("Error: Form must be filled in before submitting.");
        
    return !somethingBlank;
}
