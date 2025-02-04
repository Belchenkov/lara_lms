import $ from 'jquery';

// Password Field
$('#toggle-password').on('click', function () {
    const passportField = $('#password');

    passportField.attr('type') === 'password'
        ? passportField.attr('type', 'text')
        : passportField.attr('type', 'password');
});

// Confirm Password Field
$('#confirm-password-toggle').on('click', function () {
    const confirmPassportField = $('#confirm-password');

    confirmPassportField.attr('type') === 'password'
        ? confirmPassportField.attr('type', 'text')
        : confirmPassportField.attr('type', 'password');
});
