function openOrClose(block) {
    if(!block.classList.contains('day-open')){
        console.log("работает");
        block.classList.add('day-open');
    } else{
        block.classList.remove('day-open');
    }
}
function openOrCloseFlex(block,main) {
    if(!block.classList.contains('q-open')){
        console.log("работает");
        block.classList.add('q-open');
        main.style.height = "30%";
    } else{
        block.classList.remove('q-open');
        main.style.height = "10%";
    }
}
function openOrCloseFAQ(question){
    if(question.querySelector('.question-header-btn i').classList.contains('bx-chevron-down')){
        question.querySelector('.question-header-btn').innerHTML = "<i class='bx bx-x'></i>";
        question.querySelector('.question-body').classList.add('question-open');
        question.style.height = '220px';
    } else {
        question.querySelector('.question-header-btn').innerHTML = "<i class='bx bx-chevron-down'></i>";
        question.querySelector('.question-body').classList.remove('question-open');
        question.style.height = '100px';
    }
}