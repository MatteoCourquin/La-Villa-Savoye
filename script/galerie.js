// Lightbox :

// J'appelle mes élements :

var image = document.querySelector('.image');
var main = document.querySelector('main');
var box = document.getElementById('lightbox');
var page = document.querySelector('*');


//Function :

// Ouvrir lightbox:

function afficherBox() {

	// Définition des valeurs CSS
    box.style.display = 'block';
    page.style.overflow = 'hidden';
    console.log('afficher');
}

// Fermer lighbox

function fermerBox() {

	var display = getComputedStyle(image, null).display;
	
	// Définition des valeurs CSS
	if (display == 'block') {
        lightbox.style.display = 'none';
    }console.log('fermer');
}


//Events :

image.addEventListener('click', afficherBox);
croix.addEventListener('click', fermerBox);