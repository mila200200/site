var slideIndex=1;
showSlide(slideIndex);

function slider(n){
    showSlide(slideIndex+=n);
}

function showSlide(n){
    var i; 
    var slides = document.getElementsByClassName("team-member");
    if(n>slides.length){slideIndex=1}
    if(n<1){slideIndex=slides.length}
    for(i=0; i<slides.length;i++){
        slides[i].style.display="none";
    }
    slides[slideIndex-1].style.display="flex";
}

