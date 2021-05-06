// Menu burger :

// J'appelle mes élements :

var burger = document.getElementById('burger_ico');
var menu = document.getElementById('menu');
var main = document.querySelector('main');

// Essai pour masquer le menu burger lorsqu'on aggrandi la fenetre apres l'avoir ouvert :

var x = window.matchMedia('(max-width: 700px)');
// var y = window.matchMedia('(max-width: 1200px)');

//Function :

// Ouvrir menu :

function afficherMenu() {

	menu.style.display = 'block';
	burger.style.display = 'none';
	
    // console.log('afficher');
}

// Fermer menu :

function fermerMenu() {

    menu.style.display = 'none';
	burger.style.display = 'block';

    // console.log('fermer');
    
    // essais :
    
    // if(x.matches){
        //     menu.style.display = 'none';
        //     burger.style.display = 'block';
        // }else if(y.matches){
            //     menu.style.display = 'block';
            //     burger.style.display = 'none';
            // }            
}

function afficherMasquer() {
    if (x == true){
        console.log('ça me casse les couilles');
        // menu.style.display = 'block';
        // burger.style.display = 'none';
    }
}

afficherMasquer();



//Events :

burger.onclick = afficherMenu;
main.onclick = fermerMenu;

// Essais :

// burger.addEventListener('click', afficherMenu);
// menu.addEventListener('click', afficherMenu);
// body.addEventListener('click', fermerMenu);
