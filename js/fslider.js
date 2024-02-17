let fslideNum = 1;
seefSlides(fslideNum);

function fplusSlides(n) {
  seefSlides(fslideNum += n);
}

function fcurrentSlide(n) {
  seefSlides(fslideNum = n);
}

function seefSlides(n) {
  let i;
  let fSlides = document.getElementsByClassName("myfSlides");
  if (n > fSlides.length) {fslideNum = 1}    
  if (n < 1) {fslideNum = fSlides.length}
  for (i = 0; i < fSlides.length; i++) {
    fSlides[i].style.display = "none";  
  }
  fSlides[fslideNum-1].style.display = "block";
}