function darkMode() {
    const body = document.body;
    const inputs = document.querySelectorAll('input');

    // Alternar entre las clases 'dark' y 'light'
    if (body.classList.contains('light')) {
        body.classList.remove('light');
        body.classList.add('dark');

        // Cambiar clases de los inputs a oscuro
        inputs.forEach(input => {
            input.classList.remove('light');
            input.classList.add('dark');
        });
    } else {
        body.classList.remove('dark');
        body.classList.add('light');

        // Cambiar clases de los inputs a claro
        inputs.forEach(input => {
            input.classList.remove('dark');
            input.classList.add('light');
        });
    }
}