//inportation de mes éléments :

var zoneVerif1 = document.getElementById('zone_verif_1');
var zoneVerif2 = document.getElementById('zone_verif_2');
var zoneVerif3 = document.getElementById('zone_verif_3');
var zoneVerif4 = document.getElementById('zone_verif_4');
var nom = document.getElementById('nom');
var age = document.getElementById('age');
var email = document.getElementById('email');
var tel = document.getElementById('telephone');
var bouton = document.getElementById('bouton');


//fonctions :

function formatEmail(adresse) {
  return /\S+@\S+\.\S+/.test(adresse);
}

function formatTel(tel) {
	return /^(06|07)[0-9]{8}/gi.test(tel);
}

function validation1() {

	var message = '';

	if(nom.value.length < 3) {
		message = message + 'Le nom et prénom doivent contenir au moins 3 caractères<br />';
		zoneVerif1.innerHTML = message;
	}

	else {
		message = '';
		zoneVerif1.innerHTML = message;
	}
}

function validation2() {

	var message = '';

	if(parseInt(age.value) < 18 || age.value == '') {
		message = message + 'Vous devez être majeur.<br />';
		zoneVerif2.innerHTML = message;
	}

	else {
		message = '';
		zoneVerif2.innerHTML = message;
	}
}

function validation3() {

	var message = '';

	if(formatEmail(email.value) == false) {
		message = message + 'Veuillez entrer un email.<br />';
		zoneVerif3.innerHTML = message;
	}

	else {
		message = '';
		zoneVerif3.innerHTML = message;
	}
}

function validation4() {

	var message = '';

	if(formatTel(tel.value) == false) {
		message = message + 'Veuillez entrer un numéro de téléphone.<br />';
		zoneVerif4.innerHTML = message;
	}

	else {
		message = '';
		zoneVerif4.innerHTML = message;
	}
}


// événement :

bouton.addEventListener('click', validation1);
bouton.addEventListener('click', validation2);
bouton.addEventListener('click', validation3);
bouton.addEventListener('click', validation4);





