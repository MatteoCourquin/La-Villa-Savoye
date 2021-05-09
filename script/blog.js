var masque1 = document.getElementById('masque1');
var masque2 = document.getElementById('masque2');
var masque3 = document.getElementById('masque3');
var masque4 = document.getElementById('masque4');
var masque5 = document.getElementById('masque5');
var masque6 = document.getElementById('masque5');

var more1 = document.getElementById('more1');
var more2 = document.getElementById('more2');
var more3 = document.getElementById('more3');
var more4 = document.getElementById('more4');
var more5 = document.getElementById('more5');
var more6 = document.getElementById('more6');

var less1 = document.getElementById('less1');
var less2 = document.getElementById('less2');
var less3 = document.getElementById('less3');
var less4 = document.getElementById('less4');
var less5 = document.getElementById('less5');
var less6 = document.getElementById('less6');

function morefunction1(){
    masque1.style.display = 'block';
    more1.style.display = 'none';
    less1.style.display = 'block';
}
function morefunction2(){
    masque2.style.display = 'block';
    more2.style.display = 'none';
    less2.style.display = 'block';
}
function morefunction3(){
    masque3.style.display = 'block';
    more3.style.display = 'none';
    less3.style.display = 'block';
}
function morefunction4(){
    masque4.style.display = 'block';
    more4.style.display = 'none';
    less4.style.display = 'block';
}
function morefunction5(){
    masque5.style.display = 'block';
    more5.style.display = 'none';
    less5.style.display = 'block';
}
function morefunction6(){
    masque6.style.display = 'block';
    more6.style.display = 'none';
    less6.style.display = 'block';
}

function lessfunction1(){
    masque1.style.display = 'none';
    more1.style.display = 'block';
    less1.style.display = 'none';
}
function lessfunction2(){
    masque2.style.display = 'none';
    more2.style.display = 'block';
    less2.style.display = 'none';
}
function lessfunction3(){
    masque3.style.display = 'none';
    more3.style.display = 'block';
    less3.style.display = 'none';
}
function lessfunction4(){
    masque4.style.display = 'none';
    more4.style.display = 'block';
    less4.style.display = 'none';
}
function lessfunction5(){
    masque5.style.display = 'none';
    more5.style.display = 'block';
    less5.style.display = 'none';
}
function lessfunction6(){
    masque6.style.display = 'none';
    more6.style.display = 'block';
    less6.style.display = 'none';
}


more1.addEventListener('click', morefunction1);
more2.addEventListener('click', morefunction2);
more3.addEventListener('click', morefunction3);
more4.addEventListener('click', morefunction4);
more5.addEventListener('click', morefunction5);
more6.addEventListener('click', morefunction6);

less1.addEventListener('click', lessfunction1);
less2.addEventListener('click', lessfunction2);
less3.addEventListener('click', lessfunction3);
less4.addEventListener('click', lessfunction4);
less5.addEventListener('click', lessfunction5);
less6.addEventListener('click', lessfunction6);