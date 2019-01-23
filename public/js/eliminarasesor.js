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
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
              });
              
              Toast.fire({
                type: 'success',
                title: 'Se elimino correctamente'
              })
        }).fail(function(){
            $('#alert').html('Algo salio mal');
        });

    });

});