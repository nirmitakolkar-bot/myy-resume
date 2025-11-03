 $(document).ready(function() {
  $("#applicationForm").submit(function(event) {
    event.preventDefault(); // Stop default form submission

    $.ajax({
      url: 'submit.php',
      type: 'POST',
      data: $(this).serialize(),
      success: function(response) {
        $("#response").html(response).css({
          "background": "#e8f5e9",
          "border": "1px solid #4CAF50"
        });
        $("#applicationForm")[0].reset();
      },
      error: function() {
        $("#response").html("<p style='color:red;'>An error occurred. Please try again.</p>");
      }
    });
  });
}); 
