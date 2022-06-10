let sliderIndexThree = 1;
showSlidersThree(sliderIndexThree);
// Next/previous controls
function plusSlidersThree(n) {
    showSlidersThree(sliderIndexThree += n);
}
// Thumbnail image controls
function currentSliderThree(n) {
    showSlidersThree(sliderIndexThree = n);
}
function showSlidersThree(n) {
    let i;
    const slidersThree = document.getElementsByClassName("mySlides-three");
    const dotsThree = document.getElementsByClassName("demo-three");
    const captionTextThree = document.getElementById("caption-three");
    if (n > slidersThree.length) {sliderIndexThree = 1}
    if (n < 1) {sliderIndexThree = slidersThree.length}
    for (i = 0; i < slidersThree.length; i++) {
        slidersThree[i].style.display = "none";
    }
    for (i = 0; i < dotsThree.length; i++) {
        dotsThree[i].className = dotsThree[i].className.replace(" active", "");
    }
    slidersThree[sliderIndexThree-1].style.display = "block";
    dotsThree[sliderIndexThree-1].className += " active";
    captionTextThree.innerHTML = dotsThree[sliderIndexThree-1].alt;
}