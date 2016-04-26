$(document).foundation();



function formValidate() {
    var nameError = "",
        emailError = "",
        textareaError = "",
        name = document.getElementById("name").value,
        email = document.getElementById("email").value,
        textarea = document.getElementById("textarea").value,
        name_fback = document.getElementById("name_fback"),
        email_fback = document.getElementById("email_fback"),
        textarea_fback = document.getElementById("textarea_fback");

    /*TEXTAREA */

    if (textarea.trim() === "" || textarea.trim()  === null) {
        $("#textarea").addClass("borderError").focus();
        textareaError = ("<span class='red-error'><span class='fa fa-fw fa-times'></span>Enter a message</span>");
        textarea_fback.innerHTML = textareaError;
    } else {
        $("#textarea").removeClass("borderError").blur();
        textarea_fback.innerHTML = "";
    }

    /*EMAIL */
    if (email === "" || email  === null) {
        $("#email").addClass("borderError").focus();
        emailError = ("<span class='red-error'><span class='fa fa-fw fa-times'></span>Enter an email address</span>");
        email_fback.innerHTML = emailError;
    } else if (!/^[_a-z0-9\-]+(\.[_a-z0-9\-]+)*@[a-z0-9\-]+(\.[a-z0-9\-]+)*(\.[a-z]{2,4})$/.test(email)) {
        emailError = "<span class='red-error'><span class='fa fa-fw fa-times'></span>Enter a valid email</span>";
        email_fback.innerHTML = emailError;
        $("#email").addClass("borderError").focus();
    } else {
        $("#email").removeClass("borderError").blur();
        email_fback.innerHTML = "";
    }

    /*NAME */
    if (name === "" || name  === null) {
        $("#name").addClass("borderError").focus();
        nameError = ("<span class='red-error'><span class='fa fa-fw fa-times'></span>Enter a name</span>");
        name_fback.innerHTML = nameError;
    } else {
        $("#name").removeClass("borderError").blur();
        name_fback.innerHTML = "";
    }

    if (nameError !== "" || emailError !== "" || textareaError !== "") {
        return false;
    }
    $(".formdata").addClass("success");
    return true;
}

