const d = document

const nav = () => {
    const $nav = d.querySelector('.navegador');
    $boton = d.querySelector('.hamburger')

    d.addEventListener('DOMContentLoaded', () => {
        d.addEventListener('click', e => {
            if (e.target.matches('.hamburger *')) {
                $nav.classList.toggle('active')
                $boton.classList.toggle('is-active')
            }
        })
    })
}
nav()