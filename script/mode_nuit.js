// dark mode

// J'appelle mes élements
var btnToggle = document.querySelector('.btn-toggle')
var darkMode = document.querySelector('body')
var btn = document.querySelector('.btn-blue')
var h2 = document.querySelector('.dateTitle')

// fonction activer/désactiver
btnToggle.addEventListener('click', (darkToggle) => {

    // activation du dark mode
    if (darkMode.classList.contains('light')) {
        
        console.log('dark');
        
        btnToggle.innerHTML = '☼';
        
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
        
    // rétablissement du mode jour
    } else if (darkMode.classList.contains('dark')) {

        console.log('light');
        
        btnToggle.innerHTML = '☾';
        
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