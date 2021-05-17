document.querySelector('.menu_btn').addEventListener('click', () => {
    document.querySelector('.topo_painel').classList.toggle("show-sidebar");
})

document.querySelector('aside').style.height = `${document.querySelector('.painel_content').offsetHeight*1.5}px`;

$(function(){
    $('[formato=data]').mask('99/99/9999');
    $('[action=delete]').click(function(){
        const tipo = document.querySelector('.btn_delete').getAttribute('tipo');
        const r = confirm("Deseja excluir o "+ tipo+" registro?");
        if (r == true) {
            return true;
        } else {
            return false;
        }
    })
})
