  // Carousel dots script

  var slideIndex = 0;
  showSlides();

  //When the image changes then the dot will increment by 1 meaning it will change to the next dot
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("myCarousel");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
          slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3500); // Change image every 3.5 seconds
  }