/*function for slide show in about us page "why choose us" and feedback page "What our customers say" */

/*referred w3school to implement */
var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
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


/*Coded by myself*/
function displayDate() {
    const d = new Date();
    document.getElementById("day").innerHTML = d.getDate() + "/" + (d.getMonth() + 1) + "/" + d.getFullYear();
}


/*Coded by myself*/
function displayForm(){
	if (document.getElementById("form").style.display == 'none')
	{
		document.getElementById("form").style.display = 'block';
	}
	else{
		document.getElementById("form").style.display = 'none';
}
}

/*The pie chart codings were referred from w3schools but the resposive part with document.getElementById part was Coded by me*/
function chart() {
	/*coded by myself*/
                var xArray = ["Sold", "Renewed", "Cancelled"];
                var val1 = document.getElementById("val1").value;
                var val2 = document.getElementById("val2").value;
                var val3 = document.getElementById("val3").value;
          /*The pie chart codings were referred from w3schools*/
                var yArray = [val1, val2, val3];
                var layout = { title: "Policy data" };

                var data = [{ labels: xArray, values: yArray, type: "pie" }];

		Plotly.newPlot("Graph", data, layout);}


