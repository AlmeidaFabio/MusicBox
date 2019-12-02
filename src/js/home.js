var slideI = 0;
var slideIt = 0;

window.onload = function() {
	setInterval(passarSlide1, 4000);

	var slideW = document.getElementById("slideshow").offsetWidth;
	var obj = document.getElementsByClassName("slides");
	for(var u=0;u<obj.length;u++) {
		obj[u].style.width = slideW+"px";
	}

	setInterval(passarSlide, 9000);

	var slidewidth = document.getElementById("slideshow_img").offsetWidth;
	var objs = document.getElementsByClassName("slides_img");
	for(var i=0;i<objs.length;i++) {
		objs[i].style.width = slidewidth+"px";
	}
}

function passarSlide1() {
	var slideW = document.getElementById("slideshow").offsetWidth;
	
	if(slideI >= 2) {
		slideI = 0;
	} else {
		slideI++;
	}

	document.getElementsByClassName("slideshow_area")[0].style.marginLeft = "-"+(slideW * slideI)+"px";
}

function mudarSlide1(p) {
	slideI = p;
	var slideW = document.getElementById("slideshow").offsetWidth;
	document.getElementsByClassName("slideshow_area")[0].style.marginLeft = "-"+(slideW * slideI)+"px";
}

/*slideshow2*/

function passarSlide() {
	var slidewidth = document.getElementById("slideshow_img").offsetWidth;
	
	if(slideIt >= 6) {
		slideIt = 0;
	} else {
		slideIt++;
	}

	document.getElementsByClassName("slideshow_img_area")[0].style.marginLeft = "-"+(slidewidth * slideIt)+"px";
}


function mudarSlide(pos) {
	slideIt = pos;
	var slidewidth = document.getElementById("slideshow_img").offsetWidth;
	document.getElementsByClassName("slideshow_img_area")[0].style.marginLeft = "-"+(slidewidth * slideIt)+"px";
}
