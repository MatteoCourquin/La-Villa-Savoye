// J'appelle mes élements
var zoneVerif1 = document.getElementById('zone_verif_1');
var zoneVerif2 = document.getElementById('zone_verif_2');
var zoneVerif3 = document.getElementById('zone_verif_3');
var zoneVerif4 = document.getElementById('zone_verif_4');
var nom = document.getElementById('name');
var age = document.getElementById('age');
var email = document.getElementById('email');
var tel = document.getElementById('phone');


// verif mail
function formatEmail(adresse) {
	return /\S+@\S+\.\S+/.test(adresse);
}

// verif phone
function formatTel(tel) {
	return /^(06|07)[0-9]{8}/gi.test(tel);
}


// fonctions affichage des erreurs pour le NAME
function validation1() {
	var message = '';
	
	if(nom.value.length < 3) {
		message = message + 'The <strong>last name</strong> and <strong>first name</strong> must contain at least <strong>3</strong> characters.<br />';
		zoneVerif1.innerHTML = message;
		nom.style.background = '#ff6464';
	}else {
		message = '';
		zoneVerif1.innerHTML = message;
		nom.style.background = '#E8F0FE';
	}
}

// fonctions affichage des erreurs pour l' AGE
function validation2() {
	
	var message = '';
	
	if(parseInt(age.value) < 18 || age.value == '') {
		message = message + 'You must be of <strong>legal age</strong>.<br />';
		zoneVerif2.innerHTML = message;
		age.style.background = '#ff6464'
	}else {
		message = '';
		zoneVerif2.innerHTML = message;
		nom.style.background = '#E8F0FE';
	}
}

// fonctions affichage des erreurs pour l' E-MAIL
function validation3() {
	
	var message = '';
	
	if(formatEmail(email.value) == false) {
		message = message + 'Please enter an <strong>e-mail</strong>.<br />';
		zoneVerif3.innerHTML = message;
		email.style.background = '#ff6464'
	}else {
		message = '';
		zoneVerif3.innerHTML = message;
		nom.style.background = '#E8F0FE';
	}
}

// fonctions affichage des erreurs pour le PHONE
function validation4() {
	
	var message = '';
	
	if(formatTel(tel.value) == false) {
		message = message + 'Please enter a phone <strong>number</strong>.<br />';
		zoneVerif4.innerHTML = message;
		tel.style.background = '#ff6464'
	}else {
		message = '';
		zoneVerif4.innerHTML = message;
		nom.style.background = '#E8F0FE';
	}
}


// événement :
nom.addEventListener('keyup', validation1);
age.addEventListener('keyup', validation2);
email.addEventListener('keyup', validation3);
tel.addEventListener('keyup', validation4);