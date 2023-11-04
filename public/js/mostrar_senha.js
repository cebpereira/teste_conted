let showPassword = [
    document.getElementById('exibir-senha-atual'),
    document.getElementById('exibir-nova-senha'),
    document.getElementById('exibir-senha'),
    document.getElementById('exibir-confirmar-senha'),
]

showPassword.map(element => {
    if (element !== null) {
        element.addEventListener('click', function () {
            ['fa-eye', 'fa-eye-slash'].map(e => element.classList.toggle(e));
            element.classList.contains('fa-eye')
                ? document.getElementsByClassName(element.id)[0].setAttribute('type', 'text')
                : document.getElementsByClassName(element.id)[0].setAttribute('type', 'password');
        });
    }
});
