function validateForm() {
  let name = document.forms["feedback"]["name"].value;
  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  let gender = document.forms["feedback"]["gender"].value;
  if (gender == "") {
    alert("Gender must be ticked");
    return false;
  }
  let subject = document.forms["feedback"]["subject"].value;
  if (subject == "") {
    alert("Subject must be filled out");
    return false;
  }
  let email = document.forms["feedback"]["email"].value;
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
}
  let message = document.forms["feedback"]["message"].value;
  if (message == "") {
    alert("Message must be filled out");
    return false;
  }
}