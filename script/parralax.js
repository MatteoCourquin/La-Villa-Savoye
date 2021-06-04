// Effet parralax

// J'appelle mes élements
var imgMove = document.querySelector('.lavillasavoye_day')

// fonction parralax
window.addEventListener('scroll', () => {
    let parralax = window.scrollY;

    imgMove.style.right = -parralax + 'px';
});