document.querySelector('.eye').addEventListener('click', e => {
    const passwordInput = document.querySelector('#contrasena');
    if (e.target.classList.contains('show')) {
        e.target.classList.remove('show');
        passwordInput.type = 'text';
    } else {
        e.target.classList.add('show');
        passwordInput.type = 'password';
    }
});

document.querySelector('.eye2').addEventListener('click', e => {
    const passwordInput = document.querySelector('#ccontrasena');
    if (e.target.classList.contains('show')) {
        e.target.classList.remove('show');
        passwordInput.type = 'text';
    } else {
        e.target.classList.add('show');
        passwordInput.type = 'password';
    }
});

