// Menu burger

// J'appelle mes élements

var burger = document.getElementById('burger_ico');
var menu = document.getElementById('menu');
var croix = document.getElementById('croix');


// Fonction


function afficherMenu() {
	
	// Style du menu
	var display = getComputedStyle(menu, null).display;
	
	// Ouvrir menu
	if (display == 'none') {
		// Définition des valeurs CSS
        menu.style.display = 'block';
		burger.style.display = 'none';
        croix.style.display = 'block';
    } console.log('afficher');
}


function fermerMenu() {
	
	var display = getComputedStyle(menu, null).display;
	
	// Fermer menu
	if (display == 'block') {
		// Définition des valeurs CSS
        menu.style.display = 'none';
		burger.style.display = 'block';
    } console.log('fermer');
}


// Évenements

burger.addEventListener('click', afficherMenu);
croix.addEventListener('click', fermerMenu);
