function contactFormValidate() {
  var alertText = "";
  var firstName = document.getElementById("first_name").value;
  alertText = alertText + "First Name: " + firstName + "\n";
  var lastName = document.getElementById("last_name").value;
  alertText = alertText + "Last Name: " + lastName + "\n";
  var phone = document.getElementById("phone_number").value;
  alertText = alertText + "Phone Number: " + phone + "\n";
  var email = document.getElementById("email").value;
  alertText = alertText + "Email: " + email + "\n";
  var select = document.getElementById("reason");
  var reason = select.options[select.selectedIndex].text;
  alertText = alertText + "Reason for Contacting: " + reason + "\n";
  var message = document.getElementById("textarea").value;
  alertText = alertText + "Your Message: " + message + "\n";

  var errorText = "";
  var everythingOk = true;
  var isEmailValid = true;
  var isPhoneValid = true;

  if (validateEmail(email)) {
    isEmailValid = true;
  } else {
    isEmailValid = false;
    errorText = errorText + "Email is invalid!\n";
  }

  if (validatePhone(phone)) {
    isPhoneValid = true;
  } else {
    isPhoneValid = false;
    errorText = errorText + "Phone is invalid!\n";
  }

  everythingOk = isPhoneValid && isEmailValid;
  if (everythingOk) {
    displayMessage(alertText, everythingOk);
  } else {
    displayMessage(errorText, everythingOk);
  }
}

function validateEmail(email) {
  var validEmailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (email.match(validEmailFormat)) {
    return true;
  } else {
    return false;
  }
}

function validatePhone(number) {
  var validPhoneFormat = /^\d{10}$/;
  if (number.match(validPhoneFormat)) {
    return true;
  } else {
    return false;
  }
}

function displayMessage(text, everythingOK) {
  console.log(everythingOK);
  if (everythingOK) {
    var textToDisplay =
      "Form Successfully Submitted, Thank You!\nBelow is a recap of your details:\n" +
      text;
    alert(textToDisplay);
  } else {
    alert(text + "Please fill out the form again!\n");
  }
}
