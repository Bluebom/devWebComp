const progress = document.querySelectorAll('.skill_lv');
const openBtn = document.querySelector('span.e')
const closeBtn = document.querySelector('span.x');
const boxMobi = document.querySelector('header.mobile');
const mobiul = document.querySelectorAll('.mobile ul li a');
const deskul = document.querySelectorAll('.desktop ul li a');
// span.x,
// header.mobile

let mobimarked = mobiul[0];
let dekmarked = deskul[0];

setTimeout(() => {
    progress.forEach((value, i) => {
        value.style.width = value.getAttribute('completed') + '%';
        value.style.opacity = '1';
    })
}, 1000)

function chMarked(previouM, nextM) {
    previouM.classList.remove("marked");
    nextM.classList.add("marked");
}

function openBoxMobi(openbtn, closebtn, boxmobi){
    openbtn.style.display = 'none';
    closebtn.style.display = 'inline';
    boxMobi.style.display = 'block';
}

function closeBoxMobi(openbtn, closebtn, boxmobi){
    openbtn.style.display = 'inline';
    closebtn.style.display = 'none';
    boxMobi.style.display = 'none';
}

document.addEventListener('click', (e) =>{
    const et = e.target;
    
    if(et == openBtn) {
        openBoxMobi(openBtn, closeBtn, boxMobi);
    }

    if(et == closeBtn) {
        closeBoxMobi(openBtn, closeBtn, boxMobi);
    }

    deskul.forEach((value, i) =>{
        if(et == value){
            if(et.classList.contains('marked')){
                dekmarked = et;
            }else{
                chMarked(dekmarked, et)
                dekmarked = et;
                closeBoxMobi(et, closeBtn, boxMobi);
            }
        }
    })
    mobiul.forEach((value, i) =>{
        if(et == value){
            if(et.classList.contains('marked')){
                mobimarked = et;
            }else{
                chMarked(mobimarked, et)
                mobimarked = et;
                closeBoxMobi(openBtn, closeBtn, boxMobi);
            }
        }
    })
})
