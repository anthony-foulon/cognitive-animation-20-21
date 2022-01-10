
function read_more_post(){
  var post = document.getElementById("more-information");
  if (post.style.display=='none'){
      post.style.display='flex';
      document.getElementById("read-more").style.display='none';
      document.getElementById("make-an-appointment").style.display='flex';

  }
}

function make_an_appointment(){
    post = document.getElementById("post-experiment");
    appointment = document.getElementById("appointment");
    calendar = document.getElementById("calendar");
    post.style.display='none';
    appointment.style.display='flex';
    calendar.style.display='flex';
}

function read_more(id){
  var info = document.getElementById(id);
  if (info.style.display=='none'){
      info.style.display='flex';
  }
  else{
      info.style.display='none';
  }
}

function see_more(){
  var presentation = document.getElementById('presentation');
  var exp = document.getElementById('experiment');
  if (presentation.style.display=='none'){
      presentation.style.display='flex';
      exp.style.display='none';
  }
  else{
      presentation.style.display='none';
      exp.style.display='flex';
  }
}




var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    var slides = document.getElementsByClassName("first-page-experiment");
    var dots = document.getElementsByClassName("dot");
    if(window.innerWidth < 600){
      var i;

      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");}
      slides[slideIndex-1].style.display = "flex";
      dots[slideIndex-1].className += " active";
}
    if(window.innerWidth > 600){
        var i;
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length;console.log('ici')}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        if(n==slides.length){
            slides[slideIndex-1].style.display = "flex";
            slides[0].style.display = "flex";
            slides[1].style.display = "flex";
        }
        else{
            slides[slideIndex-1].style.display = "flex";
            slides[slideIndex].style.display = "flex";
        }

        if(slideIndex+1==slides.length){
            slides[0].style.display = "flex";}
        else{
            slides[slideIndex+1].style.display = "flex";
        }

    }
}
