let sliderIndexFive = 1;
showSlidersFive(sliderIndexFive);
// Next/previous controls
function plusSlidersFive(n) {
    showSlidersFive(sliderIndexFive += n);
}
// Thumbnail image controls
function currentSliderFive(n) {
    showSlidersFive(sliderIndexFive = n);
}
function showSlidersFive(n) {
    let i;
    const slidersFive = document.getElementsByClassName("mySlides-five");
    const dotsFive = document.getElementsByClassName("demo-five");
    const captionTextFive = document.getElementById("caption-five");
    if (n > slidersFive.length) {sliderIndexFive = 1}
    if (n < 1) {sliderIndexFive = slidersFive.length}
    for (i = 0; i < slidersFive.length; i++) {
        slidersFive[i].style.display = "none";
    }
    for (i = 0; i < dotsFive.length; i++) {
        dotsFive[i].className = dotsFive[i].className.replace(" active", "");
    }
    slidersFive[sliderIndexFive-1].style.display = "block";
    dotsFive[sliderIndexFive-1].className += " active";
    captionTextFive.innerHTML = dotsFive[sliderIndexFive-1].alt;
}