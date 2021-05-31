// Lightbox :

// J'appelle mes élements :
var page = document.querySelector('*');
var main = document.querySelector('main');

// J'appelle mes images
var image1 = document.querySelector('#image1');
var image2 = document.querySelector('#image2');
var image3 = document.querySelector('#image3');

// J'appelle mes lightbox
var box1 = document.getElementById('lightbox1');
var box2 = document.getElementById('lightbox2');
var box3 = document.getElementById('lightbox3');

// J'appelle mes croix :
var croix1 = document.getElementById('close1');
var croix2 = document.getElementById('close2');
var croix3 = document.getElementById('close3');


//Function :

// Ouvrir lightbox:
function afficherBox1() {
	// Définition des valeurs CSS
    box1.style.display = 'block';
    croix1.style.display = 'block';
    page.style.overflow = 'hidden';
}
function afficherBox2() {
    box2.style.display = 'block';
    croix2.style.display = 'block';
    page.style.overflow = 'hidden';
}
function afficherBox3() {
    box3.style.display = 'block';
    croix3.style.display = 'block';
    page.style.overflow = 'hidden';
}


// Fermer lighbox :
function fermerBox1() {
    // Définition des valeurs CSS :
    box1.style.display = 'none';
    croix1.style.display = 'none';
    page.style.overflow = 'visible';
}
function fermerBox2() {
    box2.style.display = 'none';
    croix2.style.display = 'none';
    page.style.overflow = 'visible';
}
function fermerBox3() {
    box3.style.display = 'none';
    croix3.style.display = 'none';
    page.style.overflow = 'visible';
}



//Events :

image1.addEventListener('click', afficherBox1);
image2.addEventListener('click', afficherBox2);
image3.addEventListener('click', afficherBox3);


croix1.addEventListener('click', fermerBox1);
croix2.addEventListener('click', fermerBox2);
croix3.addEventListener('click', fermerBox3);
