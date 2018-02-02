<script>
  $.validator.setDefaults({
    submitHandler: function() {
      alert("submitted!");
    }
  });

  $().ready(function() {
    // validate the comment form when it is submitted
    // $("#volunteerForm-form").validate();

    // validate signup form on keyup and submit
    $("#volunteerForm-form").validate({
      // debug: true,
      rules: {
        name: "required",
        email: {
          required: true,
          email: true
        }
      },
      messages: {
        name: "Please enter your name",
        email: "Please enter a valid email address"
      }
    });

  });
</script>
