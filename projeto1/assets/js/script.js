
// sections
const body = document.querySelector('body');
const home = document.querySelector('#Home').offsetHeight - 30;
const about = document.querySelector('#About').offsetHeight;
const services = document.querySelector('#Services').offsetHeight;
let portfolio = document.querySelector('#Portfolio').offsetHeight;
if (screen.width < 640 || screen.height < 480) {
    portfolio;
} else if (screen.width < 1024 || screen.height < 768) {
    portfolio *= 1.2;
} else {
    portfolio *= 1.65;
}

// btns
const openBtn = document.querySelector('span.e')
const closeBtn = document.querySelector('span.x');
const fixed_btn = document.querySelector('.fixed_button_up');
const btn_callP = document.querySelector('.see_jobs');
const btn_callC = document.querySelector('.call_contact');
const serviceBtn = document.querySelectorAll('.w25 .btn');

// header
const deskHeader = document.querySelector('.header-desktop')
const mobiHeader = document.querySelector('.headerToWork');
const boxMobi = document.querySelector('header.mobile');
const mobiul = document.querySelectorAll('.mobile ul li a');
const deskul = document.querySelectorAll('.desktop ul li a');

const progress = document.querySelectorAll('.skill_lv');
const loader = document.querySelector('.overlay_loading');
const success = document.querySelector('span.callback_success');
const error = document.querySelector('span.callback_error');
const include_path = 'http://192.168.2.119/dashboard/devWebComp/projeto1/';
// const include_path = 'http://franklinhenrique.com/';



let mobimarked = mobiul[0];
let deskmarked = deskul[0];

function chMarked(previouM, nextM) {
    previouM.classList.remove("marked");
    nextM.classList.add("marked");
}

function openBoxMobi(openbtn, closebtn, boxMobi) {
    openbtn.style.display = 'none';
    closebtn.style.display = 'inline';
    boxMobi.style.top = '3rem';
}

function closeBoxMobi(openbtn, closebtn, boxMobi) {
    openbtn.style.display = 'inline';
    closebtn.style.display = 'none';
    boxMobi.style.top = '-100vh';
}

openBtn.addEventListener('click', () => {
    openBoxMobi(openBtn, closeBtn, boxMobi);
})

closeBtn.addEventListener('click', () => {
    closeBoxMobi(openBtn, closeBtn, boxMobi);
})

