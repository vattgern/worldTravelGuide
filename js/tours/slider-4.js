let sliderIndexFour = 1;
showSlidersFour(sliderIndexFour);
// Next/previous controls
function plusSlidersFour(n) {
    showSlidersFour(sliderIndexFour += n);
}
// Thumbnail image controls
function currentSliderFour(n) {
    showSlidersFour(sliderIndexFour = n);
}
function showSlidersFour(n) {
    let i;
    const slidersFour = document.getElementsByClassName("mySlides-four");
    const dotsFour = document.getElementsByClassName("demo-four");
    const captionTextFour = document.getElementById("caption-four");
    if (n > slidersFour.length) {sliderIndexFour = 1}
    if (n < 1) {sliderIndexFour = slidersFour.length}
    for (i = 0; i < slidersFour.length; i++) {
        slidersFour[i].style.display = "none";
    }
    for (i = 0; i < dotsFour.length; i++) {
        dotsFour[i].className = dotsFour[i].className.replace(" active", "");
    }
    slidersFour[sliderIndexFour-1].style.display = "block";
    dotsFour[sliderIndexFour-1].className += " active";
    captionTextFour.innerHTML = dotsFour[sliderIndexFour-1].alt;
}