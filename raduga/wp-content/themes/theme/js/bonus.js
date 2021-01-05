var polosa = document.getElementById('polosa');
var items = $(".item");

var time = 5000;//1s
var min_width = 1110;
var sum = 0;
array();
polosa.style.width = sum + 'px';


var dot_back = '-' + (sum - 1110) + 'px';

var left = 0;
var timer;

function autoslyde() {
	timer = setTimeout(function () {

		left = left - 370;
		if (polosa.style.left == dot_back) {
			left = 0;
			clearTimeout(timer);
		}
		polosa.style.left = left + 'px';
		autoslyde();
	}, time);

}

function array() {
	for (var i = 0; i < items.length; i++) {
		sum = (370 * i) + 370;
	}
}

autoslyde();