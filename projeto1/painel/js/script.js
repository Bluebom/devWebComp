document.querySelector('.menu_btn').addEventListener('click', () => {
    document.querySelector('.topo_painel').classList.toggle("show-sidebar");
})

document.querySelector('aside').style.height = `${document.querySelector('.painel_content').offsetHeight*1.5}px`;

$(function(){
    $('[formato=data]').mask('99/99/9999');
})