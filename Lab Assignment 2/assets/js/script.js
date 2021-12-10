function popup() {
    alert("Welcome to my website!");
}

function validate() {
    var missingFields = false;
    var strFields = "";

    if (feedback.name.value == '') {
        missingFields = true;
        strFields += "     Please fill in your name\n";

    }
    if (feedback.gender.value == '') {
        missingFields = true;
        strFields += "     Please tick the gender\n";
    }
    if (feedback.subject.value == '') {
        missingFields = true;
        strFields += "     Please fill in the subject\n";
    }
    if (feedback.email.value == '') {
        missingFields = true;
        strFields += "     Please fill in your email\n";
    }
    if (feedback.message.value == '') {
        missingFields = true;
        strFields += "     Please fill in the message\n";
    }

    if (missingFields) {
        alert("You must provide the following information before continuing:\n" + strFields);
        return false;
    }
    alert("Your feedback has been recorded. Thank you!");
    return true;
}

function setVolume2() {
    var audio1 = document.getElementById("audio1");
    var audio2 = document.getElementById("audio2");
    audio.volume = 0.2;
}

function setVolumeFull() {
    var audio1 = document.getElementById("audio1");
    var audio2 = document.getElementById("audio2");
    audio.volume = 1.0;
}
