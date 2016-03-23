
function Scroll(){
var Expert_in = document.getElementById('effect_t');
var Latest_Works = document.getElementById('effect2');
var Contact_H = document.getElementById('effect3');
var yscreen =window.innerHeight;
var chyscreen = yscreen - 550;
var ypos = window.pageYOffset;
var xpos = window.pageXOffset;

if(yscreen > 550) {
// check Desktop
if(xpos < 960) {

// effect Expert in
if(ypos > 660-chyscreen) {
	Expert_in.style.marginTop = "78px";
	Expert_in.style.opacity = "1";
}

// effect Expert in
if(ypos > 1220-chyscreen) {
	Latest_Works.style.opacity = "1";
}
// effect Contact
if(ypos > 1780-chyscreen) {
	Contact_H.style.paddingTop = "1px";
	Contact_H.style.opacity = "1";
}

}}
else{
	Expert_in.style.marginTop = "78px";
	Expert_in.style.opacity = "1";
	Latest_Works.style.opacity = "1";
	Contact_H.style.paddingTop = "1px";
	Contact_H.style.opacity = "1";
}


}






var scrollY = 0;
var distance = 20;
var speed = 25;
function autoScrollTo(el) {
	var currentY = window.pageYOffset;
	var targetY = 640; 
	var bodyHeight = 620;
	var yPos = 620;
	var animator = setTimeout('autoScrollTo(\''+el+'\')',24);

	if(yPos > bodyHeight){
		clearTimeout(animator);
	} else {
		if(currentY < targetY-distance){
		    scrollY = currentY+distance;
		    window.scroll(0, scrollY);
	    } else {
		    clearTimeout(animator);
	    }
	}
}












function myscroll() {
   var DOWN_ARROWs = document.getElementById('DOWN_ARROW');


 window.scrollTo(0, 620);
}

//Run Event
window.addEventListener("scroll",Scroll);