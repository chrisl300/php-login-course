$(document)
.on("submit", "form.js-register", function(event) {
  event.preventDefault();

  var _form = $(this);
  var _error = $(".js-error", _form);

  var data = {
    // Look in the  _form for 'email:
    email: $("input[type='email']", _form).val(),
        // Look in the  _form for 'password:
    password: $("input[type='password']", _form).val()
  };

  // Check that the email address is longer than the shortest possible
  if (data.email.length < 6) {
    _error
      .text("Your email address is too short")
      .show();
    return false;
  } else if (data.password.length < 11){
    _error
      .text("Please enter a password that is at least 11 characters long.")
      .show();
      return false;
  }

  // Assuning the code gets this far we can start the ajax process

  // Clear the error message (if any)
  _error.hide();

  console.log(data);

  return false;
})
