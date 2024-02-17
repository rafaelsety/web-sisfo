let slideNum = 1;
seeSlides(slideNum);

function plusSlides(n) {
  seeSlides(slideNum += n);
}

function currentSlide(n) {
  seeSlides(slideNum = n);
}

function seeSlides(n) {
  let i;
  let mSlides = document.getElementsByClassName("myMSlides");
  if (n > mSlides.length) {slideNum = 1}    
  if (n < 1) {slideNum = mSlides.length}
  for (i = 0; i < mSlides.length; i++) {
    mSlides[i].style.display = "none";  
  }
  mSlides[slideNum-1].style.display = "block";
}

