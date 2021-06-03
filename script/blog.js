var more = document.getElementsByClassName('more');
var less = document.getElementsByClassName('less');

for (let i = 0; i < more.length; i++) {
    more[i].addEventListener('click', function() {
        afficher(i + 1)
    });
}

function afficher(index){
    var articles = document.getElementById('article' + index);
    var more = document.getElementById('more' + index);
    var less = document.getElementById('less' + index);
    // console.log(articles);
    console.log('afficher');
    articles.style.height = 'auto';
    more.style.display = 'none';
    less.style.display = 'block';
    less.addEventListener('click', function(){
        fermer(index);
    });
}

function fermer(index){
    var articles = document.getElementById('article' + index);
    var more = document.getElementById('more' + index);
    var less = document.getElementById('less' + index);
    console.log('masquer');
    articles.style.height = '350px';
    more.style.display = 'block';
    less.style.display = 'none';
}