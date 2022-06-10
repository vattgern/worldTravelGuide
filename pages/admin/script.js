document.querySelector(".grid").addEventListener("click", function () {
  document.querySelector(".list").classList.remove("active");
  document.querySelector(".grid").classList.add("active");
  document.querySelector(".products-area-wrapper").classList.add("gridView");
  document
    .querySelector(".products-area-wrapper")
    .classList.remove("tableView");
});

document.querySelector(".list").addEventListener("click", function () {
  document.querySelector(".list").classList.add("active");
  document.querySelector(".grid").classList.remove("active");
  document.querySelector(".products-area-wrapper").classList.remove("gridView");
  document.querySelector(".products-area-wrapper").classList.add("tableView");
});
document.querySelector(".grids").addEventListener("click", function () {
  document.querySelector(".lists").classList.remove("active");
  document.querySelector(".grids").classList.add("active");
  document.querySelector(".products-area-wrappers").classList.add("gridView");
  document.querySelector(".products-area-wrappers").classList.remove("tableView");
});

document.querySelector(".lists").addEventListener("click", function () {
  document.querySelector(".lists").classList.add("active");
  document.querySelector(".grids").classList.remove("active");
  document.querySelector(".products-area-wrappers").classList.remove("gridView");
  document.querySelector(".products-area-wrappers").classList.add("tableView");
});

document.querySelector(".gridss").addEventListener("click", function () {
  document.querySelector(".listss").classList.remove("active");
  document.querySelector(".gridss").classList.add("active");
  document.querySelector(".products-area-wrapperss").classList.add("gridView");
  document.querySelector(".products-area-wrapperss").classList.remove("tableView");
});

document.querySelector(".listss").addEventListener("click", function () {
  document.querySelector(".listss").classList.add("active");
  document.querySelector(".gridss").classList.remove("active");
  document.querySelector(".products-area-wrapperss").classList.remove("gridView");
  document.querySelector(".products-area-wrapperss").classList.add("tableView");
});

let modeSwitch = document.querySelectorAll('.mode-switch');
modeSwitch.forEach( mode =>{
  mode.addEventListener('click', function () {
    document.documentElement.classList.toggle('light');
    mode.classList.toggle('active');
    LogoView();
  });
});

function LogoView() {
  if(document.querySelector('.mode-switch').classList.contains('active')){
    console.log('darth vader');
    document.querySelector('.logo').setAttribute('src','../../images/Logo.svg');
  } else {
    document.querySelector('.logo').setAttribute('src','../../images/Logo-light.svg');
  }
}