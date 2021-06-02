// Lightbox :

// J'appelle mes élements :
var page = document.querySelector('*');
var main = document.querySelector('main');

// J'appelle mes images

var images = document.getElementsByClassName('image');
console.log(images);

for (let i = 0; i < images.length; i++) {
    images[i].addEventListener('click', function() {
        afficherBox(i + 1)
    });
}

function afficherBox(index){
    var box = document.getElementById('lightbox' + index);
    var croix = document.getElementById('close' + index);
    console.log(box);
    console.log(croix);
    box.style.display = 'block';
    croix.style.display = 'block';
    page.style.overflow = 'hidden';
    croix.addEventListener('click', fermerBox(index));
}

function fermerBox(index){
    var box = document.getElementById('lightbox' + index);
    var croix = document.getElementById('close' + index);
    box.style.display = 'none';
    croix.style.display = 'none';
    page.style.overflow = 'visible';
}





// Selecteur :

var btn_day = document.getElementById('btn_day');
var btn_night = document.getElementById('btn_night');
var btn_all = document.getElementById('btn_all');

var div_day = document.getElementsByClassName('day');
var div_night = document.getElementsByClassName('night');

function day(){
    for (let i = 0; i < div_day.length; i++) {
        div_day[i].style.display = 'block';
    }
    for (let i = 0; i < div_night.length; i++) {
        div_night[i].style.display = 'none';
    }
}

function night(){
    for (let i = 0; i < div_day.length; i++) {
        div_day[i].style.display = 'none';
    }
    for (let i = 0; i < div_night.length; i++) {
        div_night[i].style.display = 'block';
    }
}

function all(){
    for (let i = 0; i < div_day.length; i++) {
        div_day[i].style.display = 'block';
    }
    for (let i = 0; i < div_night.length; i++) {
        div_night[i].style.display = 'block';
    }
}

btn_day.addEventListener('click', day);
btn_night.addEventListener('click', night);
btn_all.addEventListener('click', all);