$(document).ready(function() {
    $('#form').submit(function(event) {
        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'sentMail.php',
            data: $('#form').serialize(),
            success: function(response) {
                if (response == 'success') {
                    // ('#message').html('Form submitted successfully!');
                } else {
                    // $('#message').html('Error: Form submission failed.');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                //$('#message').html('Error: Form submission failed.');
            }
        });
    });
});
