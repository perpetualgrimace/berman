$(document).ready(function(){

  // switch email type to 'text' and remove 'required' attribute, so we can do our own validation when js is loaded
  $("#contactform-email").attr("type", "text");
  $(".required").removeAttr("required");

  // form config
  $("#contactform form").on("submit", function(e) {

    // re-hide error messages on submit
    $('.error').hide().attr('role', 'presentation').attr('aria-hidden', 'true');

    // validation
    var name  = $('#contactform-name').val();
    var email = $('#contactform-email').val();
    var text  = $('#contactform-text').val();

    if (name === "") {
      $(".error-name").show().attr('role', '').attr('aria-hidden', 'false');
      $("#contactform-name").focus();
      return false;
    }
    if (email === "") {
      $(".error-email").show().attr('role', '').attr('aria-hidden', 'false');
      $("#contactform-email").focus();
      return false;
    }
    if(IsEmail(email) === false) {
      e.preventDefault();
      $('.error-email-invalid').show().attr('role', '').attr('aria-hidden', 'false');
      $("#contactform-email").focus();
      return false;
    }

    function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(!regex.test(email)) {
        return false;
      } else {
        return true;
      }
    }

    if (text === "") {
      $(".error-text").show().attr('role', '').attr('aria-hidden', 'false');
      $("#contactform-text").focus();
      return false;
    }

    // submission
    /*

    e.preventDefault();
    var formData = $(this).serialize();

    $.post($(this).attr("action"), formData)
    .done(function(data) {
      $("#contactform").hide();
      $(".message-success").show("slow");
    })
    .fail(function(err) {
      $("#contactform").hide();
      $(".message-fail").show("slow");
    })

    */

  });
});
