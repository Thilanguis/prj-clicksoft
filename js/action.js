$(document).ready(function () {
    $('.fa-plus-circle').on('click', function () {
        $('.addTel1').removeClass('hide');
        $('.addTel1').addClass('show');
    });
    
    $('.fa-minus-circle').on('click', function () {
        $('.addTel1').removeClass('show');
        $('.addTel1').addClass('hide');
    });
});

function excluir(id){
    if(confirm('Deseja realmente excluir este contato?'))
    {
        location.href='excluir.php?idContato='+id; 
    }
}




