function CHECKED() {
	
	var thammy = document.forms[0];
	var aryData = {};
	for(var i = 0; i < thammy.length; i++) {
		let input = thammy[i];
		let nameInput = input.getAttribute('name') || null;

		if(!input.checked || nameInput == null) {
			continue;
		}

		if(typeof aryData[nameInput] == 'undefined'){
			aryData[nameInput] = [];
		}
		aryData[nameInput].push(input.value);
	}
	
	sendData(aryData);
}

//==========================SEND key ===================================== 

function sendData(aryData) {
  	var xhttp;
  	if (window.XMLHttpRequest) {
    	// code for modern browsers
    	xhttp = new XMLHttpRequest();
  	} else {
    	// code for IE6, IE5
    	xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  	}
  	xhttp.onreadystatechange = function() {
    	if (this.readyState == 4 && this.status == 200) {
      		console.log(this.responseText)
    	}
  	};


  	xhttp.open("POST", "http://localhost/dental/model/dsBSfromVD.php", true);
  	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  	aryData = buildParamSend(aryData);

  	xhttp.send(aryData);
}

buildParamSend = (aryData) => {
	var result = [];
	for(var name in aryData){
		for(var data of aryData[name]){
			result.push(name + '[]=' + data);
		}
	}
	return result.join('&');
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}