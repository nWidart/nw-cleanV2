document.onkeyup = KeyCheck;
function KeyCheck(e) {
	var KeyID = (window.event) ? event.keyCode : e.keyCode;
	switch(KeyID) {
		case 37:
		window.location = "page.html"; //back
		break;
		case 39:
		window.location = "another-page.html"; //forward
		break;
	}
}