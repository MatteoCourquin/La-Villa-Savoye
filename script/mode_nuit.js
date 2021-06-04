
// dark mode

var btnToggle = document.querySelector('.btn-toggle')
var darkMode = document.querySelector('body')
var btn = document.querySelector('.btn-blue')
var imgToggle = document.querySelector('.lavillasavoye_day')
var h2 = document.querySelector('.dateTitle')

 btnToggle.addEventListener('click', (darkToggle) => {

    if (darkMode.classList.contains('light')) {

        console.log('dark');

        btnToggle.innerHTML = '☼';
        
        var imgToggle = document.querySelectorAll('.btn-blue')
        imgToggle.forEach(imgToggle => {
            imgToggle.classList.add('lavillasavoye_day')
            imgToggle.classList.remove('lavillasavoye_night')
        });
        
        var btn = document.querySelectorAll('.btn-blue')
        btn.forEach(btn => {
            btn.classList.add('btn-light')
            btn.classList.remove('btn-blue')
        });
        
        var body = document.querySelectorAll('.light')
        body.forEach(body => {
            body.classList.remove('light');
            body.classList.add('dark');
        });
        
        darkToggle.stopPropagation()
        
    } else if (darkMode.classList.contains('dark')) {

        console.log('light');
        
        btnToggle.innerHTML = '☾';

        var imgToggle = document.querySelectorAll('.btn-blue')
        imgToggle.forEach(imgToggle => {
            imgToggle.classList.add('lavillasavoye_night')
            imgToggle.classList.remove('lavillasavoye_day')
        });
        
        var btn = document.querySelectorAll('.btn-light')
        btn.forEach(btn => {
            btn.classList.add('btn-blue')
            btn.classList.remove('btn-light')
        });

        var body = document.querySelectorAll('.dark')
        body.forEach(body => {
            body.classList.remove('dark')
            body.classList.add('light')
        });

        darkToggle.stopPropagation()        
    }
});