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