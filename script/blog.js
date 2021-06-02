var more = document.getElementsByClassName('more');
var less = document.getElementsByClassName('less');

for (let i = 0; i < more.length; i++) {
    more[i].addEventListener('click', function() {
        afficher(i + 1)
    });
}


function afficher(index){
    var masque = document.getElementsByClassName('masques' + index);
    var more = document.getElementById('more' + index);
    var less = document.getElementById('less' + index);
    console.log(masque);
    masque.style.display = 'block';
    more.style.display = 'none';
    less.style.display = 'block';
    less.addEventListener('click', function(){
        fermer(index);
    });
}

function fermer(index){
    var masque = document.getElementsByClassName('masques');
    var more = document.getElementById('more' + index);
    var less = document.getElementById('less' + index);
    masque.style.display = 'none';
    more.style.display = 'block';
    less.style.display = 'none';
}