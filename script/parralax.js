// Effet parralax

const imgMove = document.querySelector('.lavillasavoye_day')

window.addEventListener('scroll', () => {
    let parralax = window.scrollY;

    imgMove.style.right = -parralax + 'px';
});