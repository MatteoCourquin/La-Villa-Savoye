//Je selectionne mes éléments :

var titre = document.querySelectorAll('h1 span');
var l1 = document.querySelector('#ligne1');
var l2 = document.querySelector('#ligne2');
var bouttons = document.querySelectorAll(".boutton");

//Focntion ouvrir/fermer le menu :

function afficherMenu() {
	menu.classList.toggle('visible');
}

//Fonction de la time line qui fait apparaitre les éléments au chargement de la page :

window.addEventListener('load', () => {

	var TL = gsap.timeline({paused: true});

	TL
	.staggerFrom(titre, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3)
	.from(l1, 1, {width: 0, ease: "power2.out"}, '-=1')
	.from(l2, 1, {width: 0, ease: "power2.out"}, '-=1')
	.staggerFrom(bouttons, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1');

	TL.play();

})

//Menu burger :
//Je selectionne mes éléments :

var burger = document.getElementById('burger_ico');
var menu = document.getElementById('burger_menu');
var croix = document.getElementById('croix_ico');
var lignes = document.getElementById('lignes');

//Function :

function afficherMenu() {

	var display = getComputedStyle(menu, null).display;

	if (display == 'none') {
		menu.style.display = 'block';
		burger.style.display = 'none';
		croix.style.display = 'block';
		lignes.style.display = 'none';
	}
	else if (display == 'block') {
		menu.style.display = 'none';
		burger.style.display = 'block';
		croix.style.display = 'none';
		lignes.style.display = 'none';
	}
}


//Events
burger.addEventListener('click', afficherMenu);
croix.addEventListener('click', afficherMenu);