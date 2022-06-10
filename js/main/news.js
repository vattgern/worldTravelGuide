window.addEventListener('DOMContentLoaded',()=>{
    let mainImage = document.querySelector(".card__image > img");
    let mainHeader = document.querySelector(".cards__title > h2");
    let mainText = document.querySelector(".card__text > p");
});

function setCard(card){
    let list = [];
    let mainImage = document.querySelector(".card__image > img");
    let mainHeader = document.querySelector(".card__title > h2");
    let mainText = document.querySelector(".card__text > p");
    list["url"] = card.querySelector(".cards__image > img").getAttributeNode('src').value;
    list["title"] = card.querySelector(".cards__title").textContent;
    list["text"] = card.querySelector(".cards__text").textContent;
    mainImage.style.animation = "changeImg .8s ease-in-out";
    mainImage.addEventListener("animationstart",()=>{
        setTimeout(()=>{
            mainImage.setAttribute("src",list['url']);
        },300);
    });
    mainImage.addEventListener("animationend",()=>{
        mainImage.style.animation = "";
    });
    mainHeader.style.animation = "changeHeader .8s ease-in";
    mainHeader.addEventListener("animationstart",()=>{
        setTimeout(()=>{
            mainHeader.innerText = list['title'];
        },300);
    });
    mainHeader.addEventListener('animationend',()=>{
       mainHeader.style.animation = "";
    });
    mainText.style.animation = "changeText .8s ease-out";
    mainText.addEventListener('animationstart',()=>{
       setTimeout(()=>{
           mainText.innerText = list['text'];
       },300);
    });
    mainText.addEventListener('animationend',()=>{
        mainText.style.animation = "";
    });
}