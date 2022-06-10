let sliderIndex = 1;
showSliders(sliderIndex);
// Next/previous controls
function plusSliders(n) {
    showSliders(sliderIndex += n);
}
// Thumbnail image controls
function currentSlider(n) {
    showSliders(sliderIndex = n);
}
function showSliders(n) {
    let i;
    const sliders = document.getElementsByClassName("mySlides-two");
    const dotsTwo = document.getElementsByClassName("demo-two");
    const captionTextTwo = document.getElementById("caption-two");
    if (n > sliders.length) {sliderIndex = 1}
    if (n < 1) {sliderIndex = sliders.length}
    for (i = 0; i < sliders.length; i++) {
        sliders[i].style.display = "none";
    }
    for (i = 0; i < dotsTwo.length; i++) {
        dotsTwo[i].className = dotsTwo[i].className.replace(" active", "");
    }
    sliders[sliderIndex-1].style.display = "block";
    dotsTwo[sliderIndex-1].className += " active";
    captionTextTwo.innerHTML = dotsTwo[sliderIndex-1].alt;
}