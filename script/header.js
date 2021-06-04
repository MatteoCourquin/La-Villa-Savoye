// Menu burger

// J'appelle mes élements
var burger = document.getElementById('burger_ico');
var menu = document.getElementById('menu');
var croix = document.getElementById('croix');


// Fonction afficher le menu burger
function afficherMenu() {
	
	var display = getComputedStyle(menu, null).display;
	
	if (display == 'none') {
        menu.style.display = 'block';
		burger.style.display = 'none';
        croix.style.display = 'block';
    } console.log('afficher');
}


// Fonction fermer le menu burger
function fermerMenu() {
	
	var display = getComputedStyle(menu, null).display;
	
	if (display == 'block') {
        menu.style.display = 'none';
		burger.style.display = 'block';
    } console.log('fermer');
}


// Évenements
burger.addEventListener('click', afficherMenu);
croix.addEventListener('click', fermerMenu);
