
const d = document;

(() => {
    const $form = d.querySelector('#form'),
        $div = d.querySelector('.alertas');
    $alerta = d.querySelector('.alert-danger')

    $form.addEventListener('submit', e => {
        e.preventDefault()
        let formdata = new FormData($form)
        fetch('src/controlador/login-controlador.php', {
            method: 'POST',
            body: formdata
        })
            .then(res => {
                return res.text()
            })
            .then(data => {
                console.log(data)
                if (data === ' <script src="/__prepros.js"></script> 1') {
                    console.log('el usuario existe')
                    window.location.href = 'src/administrador/index.php'
                }
                else if (data === '<script src="/__prepros.js"></script> 2') {
                    console.log('el usuario existe')
                    window.location.href = 'src/usuarios/index.php'
                }
            }).catch(err => {
                console.log(err)
            })
    })


})()
