function viewPass(block){
    let icon =  block.querySelector('.material-symbols-outlined');
    if(icon.textContent === 'visibility'){
        icon.textContent = 'visibility_off';
        document.querySelector('#password').setAttribute('type','password');
    } else {
        icon.textContent = 'visibility';
        document.querySelector('#password').setAttribute('type','text');
    }
}