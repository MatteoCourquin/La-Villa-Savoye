// Fonction pour afficher Plus ou Moins mes articles

// J'appelle mes élements
var more = document.getElementsByClassName('more');
var less = document.getElementsByClassName('less');

// boucle pour rendre fonctionel tout mes boutons "more"
for (let i = 0; i < more.length; i++) {
    more[i].addEventListener('click', function() {
        afficher(i + 1)
    });
}

// fonction dérouler les articles
function afficher(index){
    var articles = document.getElementById('text_article' + index);
    var more = document.getElementById('more' + index);
    var less = document.getElementById('less' + index);
    // console.log(articles);
    console.log('afficher');
    articles.style.display = 'block';
    more.style.display = 'none';
    less.style.display = 'block';
    less.addEventListener('click', function(){
        fermer(index);
    });
}

// fonction fermer les articles
function fermer(index){
    var articles = document.getElementById('text_article' + index);
    var more = document.getElementById('more' + index);
    var less = document.getElementById('less' + index);
    console.log('masquer');
    articles.style.display = 'none';
    more.style.display = 'block';
    less.style.display = 'none';
}