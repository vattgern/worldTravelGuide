let priceFull = 0;
let countAdult = 0;
let countNotAdult = 0;
let priceAdult = 0;
let priceNotAdult = 0;
function plusPrice(str){
    let forOnePrice = document.querySelector(`.${str} .lines-price`);
    let price = forOnePrice.textContent.replace('₽','');
    if(str === 'line-not-adult'){
        countNotAdult++;
        priceNotAdult += Number(price);
        priceFull += priceNotAdult;
        fullPrice();
        document.querySelector(`.${str} .count`).setAttribute('value',`${countNotAdult}`);
        document.querySelector(`.${str} .lines-final-price`).innerHTML = priceNotAdult + ' ₽';
    } else if(str === "line-adult"){
        countAdult++;
        priceAdult += Number(price);
        fullPrice();
        document.querySelector(`.${str} .count`).setAttribute('value',`${countAdult}`);
        document.querySelector(`.${str} .lines-final-price`).innerHTML = priceAdult + ' ₽';

    }
}
function minusPrice(str){
    let forOnePrice = document.querySelector(`.${str} .lines-price`);
    let price = forOnePrice.textContent.replace('₽','');
    if(str === 'line-not-adult'){
        if(countNotAdult !== 0){
            countNotAdult--;
            priceNotAdult -= Number(price);
        }
        fullPrice();
        document.querySelector(`.${str} .count`).setAttribute('value',`${countNotAdult}`);
        document.querySelector(`.${str} .lines-final-price`).innerHTML = priceNotAdult + ' ₽';
    } else if(str === "line-adult"){
        if(countAdult !== 0){
            countAdult--;
            priceAdult -= Number(price);
        }
        fullPrice();
        document.querySelector(`.${str} .count`).setAttribute('value',`${countAdult}`);
        document.querySelector(`.${str} .lines-final-price`).innerHTML = priceAdult + ' ₽';
    }
}
function fullPrice(){
    priceFull = priceAdult + priceNotAdult;
    document.querySelector(".form-itog input").setAttribute('value',`${priceFull} ₽`);
}