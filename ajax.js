$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();

        var username = $('#username').val().trim();
        var email = $('#email').val().trim();
        var password = $('#password').val();
        var confirmPassword = $('#confirm_password').val();
        var output = $('.output');

        if (username === '' || email === '' || password === '' || confirmPassword === '') {
            output.text('All fields ar required').css('color', 'red');
            return;
        }

        var formData = $(this).serialize();

        $.ajax({
            url: 'submition.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    output.text(response.message).css('color', 'green');
                    $("input, textarea").val("");   
                } else {
                    output.text(response.message).css('color', 'red');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error: ' + status + ' - ' + error);
                output.text('An error occurred. Please try again.');
            } 
        });
    });
});
