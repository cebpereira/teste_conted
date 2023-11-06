let showPassword = [
    'show_password_current',
    'show-password-new',
    'show-password',
    'show_password',
    'show_password_confirm',
    'show-password-confirm',
    'show_password_confirmation',
];

showPassword.forEach(elementId => {
    const element = document.getElementById(elementId);

    if (element !== null) {
        element.addEventListener('click', function () {
            const inputField = document.getElementById(elementId.replace('show-', ''));

            if (inputField !== null) {
                element.classList.toggle('fa-eye');
                element.classList.toggle('fa-eye-slash');

                if (element.classList.contains('fa-eye')) {
                    inputField.setAttribute('type', 'text');
                } else {
                    inputField.setAttribute('type', 'password');
                }
            }
        });
    }
});
