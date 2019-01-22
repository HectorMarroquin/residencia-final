$(document).ready(function(){

    $('#alert').hide();
    $('.btn-delete').click(function(e){
        e.preventDefault();
        if(! confirm("¿Estas seguro?")){
            return false;
        }

        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');

        $('#alert').show();

        $.post(url, form.serialize(), function(result){
            row.fadeOut();
            // $('#alert').html(result.message);
            toastr.success('Eliminado Correctamente');
        }).fail(function(){
            $('#alert').html('Algo salio mal');
        });

    });

});