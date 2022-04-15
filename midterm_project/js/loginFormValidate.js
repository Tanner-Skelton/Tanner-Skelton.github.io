//loginFormValidate.js

function loginFormValidate()
{
    var loginForm = document.getElementById('loginForm');
    
    var emailBlank = loginForm.loginEmail.value == null ||
                    loginForm.loginEmail.value == "";
    
    var passwordBlank = loginForm.loginPassword.value == null ||
                        loginForm.loginPassword.value == "";


    var somethingBlank = emailBlank || passwordBlank;

    if (somethingBlank)
        alert("Error: Form must be filled in before submitting.");
        
    return !somethingBlank;
}
