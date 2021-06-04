// Menu burger :

// Éléments :
var burger = document.getElementById('burger_ico');
var menu = document.getElementById('burger_menu');
var croix = document.getElementById('croix_ico');
var lignes = document.getElementById('lignes');

// Fonctions :

function afficherMenu() {
	// Menu fermé :
	if (display == 'none') {
		// Je l'affiche (CSS) :
		menu.style.display = 'block';
		burger.style.display = 'none';
		croix.style.display = 'block';
		lignes.style.display = 'none';
	} // Menu ouvert :
	else if (display == 'block') {
		// Je le ferme (CSS):
		menu.style.display = 'none';
		burger.style.display = 'block';
		croix.style.display = 'none';
		lignes.style.display = 'none';
	}
}

// Evenements
burger.addEventListener('click', afficherMenu);
croix.addEventListener('click', afficherMenu);

