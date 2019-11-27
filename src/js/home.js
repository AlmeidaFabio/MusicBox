var slideItem = 0;
window.onload = function() {
	setInterval(passarSlide, 7000);

	var slidewidth = document.getElementById("slideshow").offsetWidth;
	var objs = document.getElementsByClassName("slides");
	for(var i=0;i<objs.length;i++) {
		objs[i].style.width = slidewidth+"px";
	}
}

function passarSlide() {
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	
	if(slideItem >= 7) {
		slideItem = 0;
	} else {
		slideItem++;
	}

	document.getElementsByClassName("slideshow_area")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
}


function mudarSlide(pos) {
	slideItem = pos;
	var slidewidth = document.getElementById("slideshow").offsetWidth;
	document.getElementsByClassName("slideshow_area")[0].style.marginLeft = "-"+(slidewidth * slideItem)+"px";
}
