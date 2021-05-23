const burger = document.querySelector('.burger-menu');
const nav = document.querySelector('nav');
let menuOpen = false;

burger.addEventListener('click',() => {
    if(!menuOpen){
        burger.classList.add('open');
        menuOpen = true;
    }else{
        burger.classList.remove('open');
        menuOpen = false;
    }
    nav.classList.toggle('nav-active');
})

const thanksDiv = document.getElementById("done");
const submit = document.getElementById("send-btn-contact");
const status = false;

submit.addEventListener('click',() => {
    status = true;
    if (status) {
        thanksDiv.style = "display:flex";
    }
})

thanksDiv.addEventListener('click',() => {
    thanksDiv.style = "display:none";
    status = false;
})

