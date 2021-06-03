
var body = document.getElementsByTagName('html');
var img_day = document.querySelector('#lavillasavoye_day');
var img_night = document.querySelector('#lavillasavoye_night');
var btn_dark = document.getElementById('btn_dark');
var btn_light = document.getElementById('btn_light');

function dark(index){
    console.log('dark');
    btn_light.style.display = 'block';
    body.style.backgroundColor = 'black';
    // img_day.style.display = 'none';
    // img_night.style.display = 'block';
}

function light(index){
    console.log('light');
    // articles.style.display = 'none';
    // more.style.display = 'block';
    // less.style.display = 'none';
}

btn_dark.addEventListener('click', dark);
btn_light.addEventListener('click', light);