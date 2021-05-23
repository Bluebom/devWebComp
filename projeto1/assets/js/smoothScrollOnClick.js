// smoothScrollOnClick

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
        top: home + about + services + 160,
        behavior: "smooth",
    });
})

btn_callC.addEventListener('click', (e) => {
    e.preventDefault();
    window.scroll({
        top: home + about + services + portfolio*1.8,
        behavior: "smooth",
    });
})

serviceBtn.forEach(value =>{
    value.addEventListener('click', (event) => {
        event.preventDefault();
        window.scroll({
            top: home + about + services + portfolio*1.8,
            behavior: "smooth",
        })
    })
})

mobiul.forEach((value) => {
    value.addEventListener('click', (event) => {
        event.preventDefault();
        const element = event.target;
        // smooth scroll
        if (element == value) {
            const urlLength = value.getAttribute('href').indexOf('#');
            const id = value.getAttribute('href').slice(urlLength);
            if (id == '#Home') {
                window.scroll({
                    top: 0,
                    behavior: "smooth",
                });
                closeBoxMobi(openBtn, closeBtn, boxMobi);
            } else if (id == '#About') {
                window.scroll({
                    top: home,
                    behavior: "smooth",
                });
                closeBoxMobi(openBtn, closeBtn, boxMobi);
            } else if (id == '#Services') {
                window.scroll({
                    top: home + about,
                    behavior: "smooth",
                });
                closeBoxMobi(openBtn, closeBtn, boxMobi);

            } else if (id == '#Portfolio') {
                window.scroll({
                    top: home + about + services + 160,
                    behavior: "smooth",
                });
                closeBoxMobi(openBtn, closeBtn, boxMobi);

            } else if (id == '#Contact') {
                window.scroll({
                    top: home + about + services + portfolio + 80,
                    behavior: "smooth",
                });
                closeBoxMobi(openBtn, closeBtn, boxMobi);

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
            const urlLength = value.getAttribute('href').indexOf('#');
            const id = value.getAttribute('href').slice(urlLength);
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
                    top: home + about + services + 80,
                    behavior: "smooth",
                })
            } else if (id == '#Contact') {
                window.scroll({
                    top: home + about + services + 1.8*portfolio,
                    behavior: "smooth",
                })
            };
        }
    })
})