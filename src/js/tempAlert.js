const alertTemp = () => {
    const $alert = document.querySelector('.alertas');
    setInterval(() => {
        // console.log($alert);
        const divElement = $alert.querySelector('div');
        if (divElement) {
            $alert.removeChild(divElement);
        }
    }, 4500);
}

document.addEventListener('DOMContentLoaded', () => {
    alertTemp();
});
