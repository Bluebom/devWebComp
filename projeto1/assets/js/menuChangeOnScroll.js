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
        mobiHeader.style.borderBottom = '3px solid #fff200';
        deskHeader.style.background = '#2B2B2B';
        deskHeader.style.borderBottom = '3px solid #fff200';
        openBtn.style.color = '#FFF'
        closeBtn.style.color = '#FFF'
        deskul.forEach((value, i) => {
            value.style.color = 'white'
            if (value.classList.contains('marked')) {
                value.style.color = '#FFF200'
            } else {
                value.style.fontWeight = 'normal'
            }
        })

    } else if (offsetY < (home + about - 30)) {
        chMarked(mobimarked, mobiul[1]);
        mobimarked = mobiul[1];
        chMarked(deskmarked, deskul[1]);
        deskmarked = deskul[1];
        fixed_btn.style.visibility = 'visible';
        deskHeader.style.background = '#2B2B2B';
        deskHeader.style.borderBottom = '3px solid #fff200';
        mobiHeader.style.background = '#2B2B2B';
        mobiHeader.style.borderBottom = '3px solid #fff200';
        openBtn.style.color = '#FFF'
        closeBtn.style.color = '#FFF'
        deskul.forEach((value, i) => {
            value.style.color = 'white'
            if (value.classList.contains('marked')) {
                value.style.color = '#FFF200'
            } else {
                value.style.fontWeight = 'normal'
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
        mobiHeader.style.borderBottom = '3px solid #fff200';
        openBtn.style.color = '#fff';
        closeBtn.style.color = '#fff';
        deskHeader.style.background = '#2B2B2B';
        deskHeader.style.borderBottom = '3px solid #fff200';
        openBtn.style.color = '#FFF';
        closeBtn.style.color = '#FFF'
        deskul.forEach((value, i) => {
            value.style.color = 'white'
            if (value.classList.contains('marked')) {
                value.style.color = '#FFF200'
            } else {
                value.style.fontWeight = 'normal'
            }
        })
    } else if (offsetY < (home + about + services + portfolio)) {
        chMarked(mobimarked, mobiul[3]);
        mobimarked = mobiul[3];
        chMarked(deskmarked, deskul[3]);
        deskmarked = deskul[3];
        fixed_btn.style.visibility = 'visible';
        mobiHeader.style.background = 'white';
        mobiHeader.style.borderBottom = '3px solid #a9aeb3';
        openBtn.style.color = '#2b2b2b';
        closeBtn.style.color = '#2b2b2b';
        deskHeader.style.background = 'white';
        deskHeader.style.borderBottom = '3px solid #a9aeb3';
        deskul.forEach((value, i) => {
            value.style.color = '#2B2B2B'
            if (value.classList.contains('marked')) {
                value.style.color = 'black';
                value.style.fontWeight = 'bold'
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
        mobiHeader.style.borderBottom = '3px solid #fff200';
        deskHeader.style.background = '#2B2B2B';
        deskHeader.style.borderBottom = '3px solid #fff200';
        openBtn.style.color = '#FFF'
        closeBtn.style.color = '#FFF'
        deskul.forEach((value, i) => {
            value.style.color = 'white'
            if (value.classList.contains('marked')) {
                value.style.color = '#FFF200'
            } else {
                value.style.fontWeight = 'normal'
            }
        })


    }

})

