function validateForm() {
    let fname = document.forms["feedbackform"]["fname"].value;
    let lname = document.forms["feedbackform"]["lname"].value;
    let email = document.forms["feedbackform"]["email"].value;
    let bookname = document.forms["feedbackform"]["bookname"].value;
    let satisfaction = document.forms["feedbackform"]["satisfaction"].value;

    if (fname == "") {
      alert("First name must be filled out");
      return false;
    }
    else if (lname == "") {
        alert("Last name must be filled out");
        return false;
    }
    else if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    
    else if (!validateEmail(email)) {
        console.log(email)
        alert("Enter correct Email format");
        return false;
    }
    else if (satisfaction == "") {
        alert("Please enter your Satisfaction level");
        return false;
    }
    return true;
  }


  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }


  function containsUppercase(str) {
    return /[A-Z]/.test(str);
  }


  function hasNumber(myString) {
    return /\d/.test(myString);
  }

  
function validateRegister(){
    let fname = document.forms["registerform"]["fname"].value;
    let lname = document.forms["registerform"]["lname"].value;
    let email = document.forms["registerform"]["email"].value;
    let password = document.forms["registerform"]["password"].value;
    let badpass = document.getElementById("badpass");
    
    if (fname == "") {
      alert("First name must be filled out");
      return false;
    }
    else if (lname == "") {
        alert("Last name must be filled out");
        return false;
    }
    else if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    
    else if (!validateEmail(email)) {
        alert("Enter correct Email format");
        return false;
    }
    else if (password.length <8 ){
        badpass.innerText = "Password must be 8 character or more";
        return false;
    }
    else if (!containsUppercase(password)){
      badpass.innerText = "Password must have a capital letter";
      return false;
    }
    else if (!hasNumber(password)){
      badpass.innerText = "Password must have a number";
      return false;
    }
    
    return true;
}