function closeAlert(){
	setTimeout(function() {
		document.getElementsByClassName('Alert-text')[0].style.display="none";
		document.getElementsByClassName('Alert')[0].style.backgroundColor="rgba(0,0,0,0)";
	}, 5000);
}