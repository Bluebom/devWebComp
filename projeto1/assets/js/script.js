const progress = document.querySelectorAll('.skill_lv');

setTimeout(() => {
    progress.forEach((value, i) => {
        value.style.width = value.getAttribute('completed') + '%';
        value.style.opacity = '1';
    })
}, 1000)


