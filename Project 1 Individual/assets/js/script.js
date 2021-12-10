function validateForm() {
  var name = document.forms["feedback"]["name"].value;
  if (name == "") {
    alert("Please fill in the name field");
    return false;
  }
  var gender = document.forms["feedback"]["gender"].value;
  if (gender == "") {
    alert("Gender must be ticked");
    return false;
  }
  var subject = document.forms["feedback"]["subject"].value;
  if (subject == "") {
    alert("Please fill in the subject field");
    return false;
  }
  var email = document.forms["feedback"]["email"].value;
  if (email == "") {
    alert("Please fill in the email field");
    return false;
  }
  var message = document.forms["feedback"]["message"].value;
  if (message == "") {
    alert("Please fill in the message field");
    return false;
  }
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
