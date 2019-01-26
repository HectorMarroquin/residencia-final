$(document).ready(function(){

    
    $('.btn-delete').click(function(e){
        
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');
        Swal.fire({
            title: '¿Estas Seguro?',
            text: "No podras revertir esto!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar!',
            confirmButtonText: 'Eliminarlo!'
          }).then((result) => {
            if (result.value) {
             
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
                    Swal.fire(
                        'Algo salio mal!',
                        'error'
                      )
                })
              
            }
          })
      


       

       

    });

});