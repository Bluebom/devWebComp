const progress = document.querySelectorAll('.skill_lv');
const openBtn = document.querySelector('span.e')
const closeBtn = document.querySelector('span.x');
const boxMobi = document.querySelector('header.mobile');
const mobiul = document.querySelectorAll('.mobile ul li a');
const deskul = document.querySelectorAll('.desktop ul li a');
const body = document.querySelector('body');
const home = document.querySelector('#Home').offsetHeight - 30;
const about = document.querySelector('#About').offsetHeight;
const services = document.querySelector('#Services').offsetHeight;
const portfolio = document.querySelector('#Portfolio').offsetHeight;
const porth1 = document.querySelector('#Porth1').offsetHeight;
const fixed_btn = document.querySelector('.fixed_button_up');
const btn_callP = document.querySelector('.call_portfolio');
const btn_callC = document.querySelector('.call_contact');
const deskHeader = document.querySelector('.header-desktop')
const mobiHeader = document.querySelector('.header-mobile');

let mobimarked = mobiul[0];
let deskmarked = deskul[0];

function setBodyHeight(height) {
    return body.style.height = `${height / 16}rem`;
}

function chMarked(previouM, nextM) {
    previouM.classList.remove("marked");
    nextM.classList.add("marked");
}

function openBoxMobi(openbtn, closebtn, boxmobi) {
    openbtn.style.display = 'none';
    closebtn.style.display = 'inline';
    boxMobi.style.display = 'block';
}

function closeBoxMobi(openbtn, closebtn, boxmobi) {
    openbtn.style.display = 'inline';
    closebtn.style.display = 'none';
    boxMobi.style.display = 'none';
}

setBodyHeight(body.scrollHeight);

openBtn.addEventListener('click', () => {
    openBoxMobi(openBtn, closeBtn, boxMobi);
    mobiHeader.style.background = '#2B2B2B';
})

closeBtn.addEventListener('click', () => {
    closeBoxMobi(openBtn, closeBtn, boxMobi);
    mobiHeader.style.background = '#2B2B2B';
    openBtn.style.color = 'white';
})


fixed_btn.firstChild.addEventListener('click', (e) => {
    e.preventDefault();
    window.scroll({
        top: 0,
        behavior: "smooth",
    });
})

btn_callP.addEventListener('click', (e) => {
    e.preventDefault();
    window.scroll({
        top: home + about + services + porth1 / 2.5,
        behavior: "smooth",
    });
})

btn_callC.addEventListener('click', (e) => {
    e.preventDefault();
    window.scroll({
        top: home + about + services + portfolio + 30,
        behavior: "smooth",
    });
})

mobiul.forEach((value) => {
    value.addEventListener('click', (event) => {
        event.preventDefault();
        const element = event.target;
        // smooth scroll
        if (element == value) {
            const id = value.getAttribute('href').slice(46);
            if (id == '#Home') {
                window.scroll({
                    top: 0,
                    behavior: "smooth",
                })
            } else if (id == '#About') {
                window.scroll({
                    top: home,
                    behavior: "smooth",
                })
            } else if (id == '#Services') {
                window.scroll({
                    top: home + about,
                    behavior: "smooth",
                })
            } else if (id == '#Portfolio') {
                window.scroll({
                    top: home + about + services + porth1 / 2.5,
                    behavior: "smooth",
                })
            } else if (id == '#Contact') {
                window.scroll({
                    top: home + about + services + portfolio + 30,
                    behavior: "smooth",
                })
            };
        }
    })
})

deskul.forEach(value => {
    value.addEventListener('click', (event) => {
        event.preventDefault();
        const element = event.target;
        // smooth scroll
        if (element == value) {
            const id = value.getAttribute('href').slice(46);
            if (id == '#Home') {
                window.scroll({
                    top: 0,
                    behavior: "smooth",
                })
            } else if (id == '#About') {
                window.scroll({
                    top: home,
                    behavior: "smooth",
                })
            } else if (id == '#Services') {
                window.scroll({
                    top: home + about,
                    behavior: "smooth",
                })
            } else if (id == '#Portfolio') {
                window.scroll({
                    top: home + about + services + porth1 / 2.5,
                    behavior: "smooth",
                })
            } else if (id == '#Contact') {
                window.scroll({
                    top: home + about + services + portfolio + 30,
                    behavior: "smooth",
                })
            };
        }
    })
})

// scroll

document.addEventListener('scroll', () => {
    const offsetY = window.pageYOffset;

    if (offsetY < home) {
        chMarked(mobimarked, mobiul[0]);
        mobimarked = mobiul[0];
        chMarked(deskmarked, deskul[0]);
        deskmarked = deskul[0];
        fixed_btn.style.visibility = 'hidden';
        mobiHeader.style.background = '#2B2B2B';
        deskHeader.style.background = '#2B2B2B';
        openBtn.style.color = '#FFF'
        closeBtn.style.color = '#FFF'
        deskul.forEach((value, i) => {
            value.style.color = 'white'
            if (value.classList.contains('marked')) {
                value.style.color = '#FFF200'
            }
        })

    } else if (offsetY < (home + about)) {
        chMarked(mobimarked, mobiul[1]);
        mobimarked = mobiul[1];
        chMarked(deskmarked, deskul[1]);
        deskmarked = deskul[1];
        fixed_btn.style.visibility = 'visible';
        deskHeader.style.background = '#2B2B2B';
        mobiHeader.style.background = '#2B2B2B';
        openBtn.style.color = '#FFF'
        closeBtn.style.color = '#FFF'
        deskul.forEach((value, i) => {
            value.style.color = 'white'
            if (value.classList.contains('marked')) {
                value.style.color = '#FFF200'
            }
        })
        let delay = 0;
        setTimeout(() => {
            progress.forEach((value, i) => {
                delay = i
                setTimeout(() => { 
                    value.style.width = value.getAttribute('completed') + '%';
                    value.style.opacity = '1';
                }, delay * 750)
            })
        }, 1000)

    } else if (offsetY < (home + about + services)) {
        chMarked(mobimarked, mobiul[2]);
        mobimarked = mobiul[2];
        chMarked(deskmarked, deskul[2]);
        deskmarked = deskul[2];
        fixed_btn.style.visibility = 'visible';
        mobiHeader.style.background = '#2B2B2B';
        deskHeader.style.background = '#2B2B2B';
        openBtn.style.color = '#FFF';
        closeBtn.style.color = '#FFF'
        deskul.forEach((value, i) => {
            value.style.color = 'white'
            if (value.classList.contains('marked')) {
                value.style.color = '#FFF200'
            }
        })
    } else if (offsetY < (home + about + services + portfolio)) {
        chMarked(mobimarked, mobiul[3]);
        mobimarked = mobiul[3];
        chMarked(deskmarked, deskul[3]);
        deskmarked = deskul[3];
        fixed_btn.style.visibility = 'visible';
        mobiHeader.style.background = 'white';
        deskHeader.style.background = 'white';
        deskul.forEach((value, i) => {
            value.style.color = '#2B2B2B'
            if (value.classList.contains('marked')) {
                value.style.color = 'black'
            }
        })
        openBtn.style.color = '#2B2B2B'
        closeBtn.style.color = '#2B2B2B'
    } else {
        chMarked(mobimarked, mobiul[4]);
        mobimarked = mobiul[4];
        chMarked(deskmarked, deskul[4]);
        deskmarked = deskul[4];
        fixed_btn.style.visibility = 'visible';
        mobiHeader.style.background = '#2B2B2B';
        deskHeader.style.background = '#2B2B2B';
        openBtn.style.color = '#FFF'
        closeBtn.style.color = '#FFF'
        deskul.forEach((value, i) => {
            value.style.color = 'white'
            if (value.classList.contains('marked')) {
                value.style.color = '#FFF200'
            }
        })


    }

})

/* slider-carousel */
const track = document.querySelector('.carousel_track')
const slides = Array.from(track.children)
const nextButton = document.querySelector('#right-triangle')
const prevButton = document.querySelector('#left-triangle')
const dotsNav = document.querySelector('.carousel_nav')
const dots = Array.from(dotsNav.children);

const slideWidth = slides[0].getBoundingClientRect().width;


// arrange the slides next to ono another
const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px';
};
slides.forEach(setSlidePosition);


const moveToSlide = (track, currentSlide, targetSlide) => {
    if (targetSlide === null) return;
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current_slide');
    targetSlide.classList.add('current_slide')
}

const selectTheDot = (currentDot, targetDot) => {
    if (targetDot === null) return;
    currentDot.classList.remove('current_slide');
    targetDot.classList.add('current_slide')
}

const hideShowArrows = (targetIndex, slides, prevButton, nextButton) => {
    if (targetIndex === 0) {
        prevButton.classList.add('is_hidden');
        nextButton.classList.remove('is_hidden');
    } else if (targetIndex === (slides.length - 1)) {
        nextButton.classList.add('is_hidden');
        prevButton.classList.remove('is_hidden');
    } else {
        prevButton.classList.remove('is_hidden');
        nextButton.classList.remove('is_hidden');
    };
}

// when I click left, move slides to the left
prevButton.addEventListener('click', e => {
    const currentDot = dotsNav.querySelector('.current_slide')
    const prevDot = currentDot.previousElementSibling;
    const currentSlide = track.querySelector('.current_slide');
    const prevSlide = currentSlide.previousElementSibling;
    const prevIndex = slides.findIndex(slide => slide === prevSlide)

    // move to the previous slide
    moveToSlide(track, currentSlide, prevSlide);

    selectTheDot(currentDot, prevDot);

    hideShowArrows(prevIndex, slides, prevButton, nextButton);


})

// when I click right, move slides to the right
nextButton.addEventListener('click', e => {
    const currentDot = dotsNav.querySelector('.current_slide')
    const nextDot = currentDot.nextElementSibling;
    const currentSlide = track.querySelector('.current_slide');
    const nextSlide = currentSlide.nextElementSibling;
    const nextIndex = slides.findIndex(slide => slide === nextSlide)

    // move to the next slide
    moveToSlide(track, currentSlide, nextSlide);

    selectTheDot(currentDot, nextDot);

    hideShowArrows(nextIndex, slides, prevButton, nextButton);



})

// when I click the nav indicators, move to that slides
dotsNav.addEventListener('click', e => {
    // what indicator was clicked on ?
    const targetDot = e.target.closest('button');

    if (!targetDot) return;

    const currentSlide = track.querySelector('.current_slide')
    const currentDot = dotsNav.querySelector('.current_slide')
    const targetIndex = dots.findIndex(dot => dot === targetDot)
    const targetSlide = slides[targetIndex]

    moveToSlide(track, currentSlide, targetSlide);

    selectTheDot(currentDot, targetDot);

    hideShowArrows(targetIndex, slides, prevButton, nextButton);
});