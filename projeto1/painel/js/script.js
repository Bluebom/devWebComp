document.querySelector('.menu_btn').addEventListener('click', () => {
    document.querySelector('.topo_painel').classList.toggle("show-sidebar");
})

document.querySelector('aside').style.height = `${document.querySelector('.painel_content').offsetHeight*1.5}px`;
