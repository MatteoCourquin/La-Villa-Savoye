
// Menu burger :

// J'appelle mes élements :

var burger = document.getElementById('burger_ico');
var menu = document.getElementById('menu');
var croix = document.getElementById('croix');

//Function :

// Ouvrir menu :

// function afficherMenu() {

//     var display = getComputedStyle(menu, null).display;

//     if (display == 'none'){
//         menu.style.display = 'block';
//         burger.style.display = 'none';
//     }
	
//     console.log('afficher');
// }

// // Fermer menu :

// function fermerMenu() {

//     menu.style.display = 'block';
//     burger.style.display = 'none';

//     console.log('fermer');
               
// }

function afficherMenu() {

	var display = getComputedStyle(menu, null).display;

	if (display == 'none') {
        menu.style.display = 'block';
		burger.style.display = 'none';
        croix.style.display = 'block';
    }console.log('afficher');
}

function fermerMenu() {

	var display = getComputedStyle(menu, null).display;

	if (display == 'block') {
        menu.style.display = 'none';
		burger.style.display = 'block';
    }console.log('fermer');
}





//Events :

burger.addEventListener('click', afficherMenu);
croix.addEventListener('click', fermerMenu);
