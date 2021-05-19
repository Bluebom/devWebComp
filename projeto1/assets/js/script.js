
// sections
const body = document.querySelector('body');
const home = document.querySelector('#Home').offsetHeight - 30;
const about = document.querySelector('#About').offsetHeight;
const services = document.querySelector('#Services').offsetHeight;
const portfolio = document.querySelector('#Portfolio').offsetHeight;

// btns
const openBtn = document.querySelector('span.e')
const closeBtn = document.querySelector('span.x');
const fixed_btn = document.querySelector('.fixed_button_up');
const btn_callP = document.querySelector('.see_jobs');
const btn_callC = document.querySelector('.call_contact');
const serviceBtn = document.querySelectorAll('.w25 .btn');

// header
const deskHeader = document.querySelector('.header-desktop')
const mobiHeader = document.querySelector('.header-mobile');
const boxMobi = document.querySelector('header.mobile');
const mobiul = document.querySelectorAll('.mobile ul li a');
const deskul = document.querySelectorAll('.desktop ul li a');

const progress = document.querySelectorAll('.skill_lv');
const loader = document.querySelector('.overlay_loading');
const success = document.querySelector('span.callback_success');
const error = document.querySelector('span.callback_error');
const include_path = 'http://localhost/dashboard/devWebComp/projeto1/';

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
    mobiHeader.style.background = '#2B2B2B';
})

closeBtn.addEventListener('click', () => {
    closeBoxMobi(openBtn, closeBtn, boxMobi);
    mobiHeader.style.background = '#2B2B2B';
    openBtn.style.color = 'white';
})

