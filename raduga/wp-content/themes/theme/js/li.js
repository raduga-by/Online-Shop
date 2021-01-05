const button = document.querySelector('.but');


var l1 = document.getElementById("l1");
var l2 = document.getElementById("l2");
var l3 = document.getElementById("l3");
var l4 = document.getElementById("l4");
var l5 = document.getElementById("l5");
var l6 = document.getElementById("l6");
var l7 = document.getElementById("l7");

var click = document.getElementById("event");
var menu = document.getElementById("menu");


click.onmouseover = function () { _click() };

menu.onmouseover = function () { _hover() };
click.onmouseout = function () { _not_click() };
menu.onmouseout = function () { _not_click() };


document.getElementById("menu").style.display = 'none';

function _hover() {
	document.getElementById("menu").style.display = 'block';
}

function _not_click() {
	document.getElementById("menu").style.display = 'none';
}

function _click() {
	document.getElementById("menu").style.display = 'block';

	l1.style.animation = 'slidein_click .7s forwards';
	l1.style.animationDelay = '0s';
	//
	l2.style.animation = 'slidein_click .7s forwards';
	l2.style.animationDelay = '0.1s';
	//
	l3.style.animation = 'slidein_click .7s forwards';
	l3.style.animationDelay = '0.2s';
	//
	l4.style.animation = 'slidein_click .7s forwards';
	l4.style.animationDelay = '0.3s';
	//
	l5.style.animation = 'slidein_click .7s forwards';
	l5.style.animationDelay = '0.4s';
	//
	l6.style.animation = 'slidein_click .7s forwards';
	l6.style.animationDelay = '0.5s';
	//
	l7.style.animation = 'slidein_click .7s forwards';
	l7.style.animationDelay = '0.6s';



}


