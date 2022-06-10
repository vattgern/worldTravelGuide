window.addEventListener("DOMContentLoaded",()=>{
    const btnLeft = document.querySelector(".left__btn"),
        btnRight = document.querySelector(".right__btn"),
        slides = document.querySelectorAll(".advice__item"),
        windowSlider = document.querySelector(".advice__window");


    let widthSlide = slides[0].clientWidth;
    let widthWindow = windowSlider.clientWidth;

    let screenCount = 6;

    function resize(){
        if(document.body.clientWidth < 1281 && document.body.clientWidth > 1026){
            screenCount = 3;
        } else if(document.body.clientWidth < 1025 && document.body.clientWidth > 821){
            screenCount = 4;
        } else if(document.body.clientWidth < 821){
            screenCount = 4;
            widthBetweenSlide = 20;
        }
    }

    console.log("Размер одной карты = " + widthSlide);
    console.log("Размер окна = " + widthWindow);

    let marginLeft = 0;
    let widthBetweenSlide = (widthWindow - (widthSlide * 3)) / 2;
    resize();
    console.log(widthSlide * (slides.length - 3));
    console.log("Размер отступа = " + widthBetweenSlide);


    btnRight.addEventListener('click',()=>{
        if(marginLeft > -1 * (widthSlide * (slides.length - 3))){

            if(document.body.clientWidth < 821){
                marginLeft -= widthWindow;
                marginLeft -= (widthBetweenSlide);
            } else {
                marginLeft -= widthWindow / 3;
                marginLeft -= (widthBetweenSlide / 2) - screenCount;
            }
            console.log("Отступ вправо на " + marginLeft);
            slides[0].style.marginLeft = marginLeft + 'px';
        }
    });


    btnLeft.addEventListener('click',()=>{
        if(marginLeft < 0) {

            if(document.body.clientWidth < 821){
                marginLeft += widthWindow;
                marginLeft += (widthBetweenSlide);
            } else {
                marginLeft += widthWindow / 3;
                marginLeft += (widthBetweenSlide / 2) - screenCount;
            }

            console.log("Отступ влево на " + marginLeft);
            slides[0].style.marginLeft = marginLeft + 'px';
        }
    });
});
