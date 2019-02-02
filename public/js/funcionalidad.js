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



    $('.btn-delet').click(function(e){
        
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
                    Swal.fire({
                        position: 'top-end',
                        type: 'success',
                        title: 'Tu accion ha sido procesada',
                        showConfirmButton: false,
                        timer: 1500
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




    
    $('.btn-dele').click(function(e){
        
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
                    Swal.fire({
                        position: 'top-end',
                        type: 'success',
                        title: 'Tu accion ha sido procesada',
                        showConfirmButton: false,
                        timer: 1500
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



    $("#searchInput").change(function () {
        if(this.value != "all")
          {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#fbody").find("tr");
        if (this.value == "") {
            jo.show();
            return;
        }
        //hide all the rows
        jo.hide();
        
        //Recusively filter the jquery object to get results.
        jo.filter(function (i, v) {
            var $t = $(this);
            for (var d = 0; d < data.length; ++d) {
                if ($t.is(":contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        })
        //show the rows that match.
        .show();
          }
        }).focus(function () {
        this.value = "";
        $(this).css({
            "color": "black"
        });
        $(this).unbind('focus');
        }).css({
        "color": "#C0C0C0"
        });

});
	var i = 0; 
	var fila;
	$(document).ready(function(){	
		$("#btnNuevointegrante").click(function(){
		i += 1;

		if (i < 6) {
			fila='<tr id="fila'+i+'"> <td><input type="text" name="ApellidoPC'+i+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="ApellidoMC'+i+'"  class="form-control infoemprendedor"></td><td><input type="text" name="NombreC'+i+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="CURPC'+i+'"  class="form-control infoemprendedor"> </td></tr>';
			$('#integrantes').append(fila);
		} else {
			Swal.fire(
				'Solo puedes agregar 5 integrantes!',
				'Clic en el boton!',
				'warning'
			  )
		}
	});

	var b = 0; 
	function sumador () {
		b += 1;
	}

	$("#compet").click(function(){
		sumador();
		if (b < 10) {
			var fila1='<tr><td><input type="text" name="nombrecompe'+b+'"  class="form-control infoemprendedor"></td><td colspan="2"><input type="text" name="giro'+b+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="direccioncompe'+b+'"  class="form-control infoemprendedor"> </td></tr>';
			$('#competencia').append(fila1);
		} else {
			Swal.fire(
				'Solo puedes agregar 10 Competencia!',
				'Clic en el boton!',
				'warning'
			  )
		}
		
	});

	var a = 0; 
	function contadorr () {
		a += 1;
	}
	$("#client-pot").click(function(){
		contadorr();
		if (a < 10) {
			var fila2='<tr><td><input type="text" name="nombreclien'+a+'"  class="form-control infoemprendedor"></td><td colspan="2"><input type="text" name="giroclien'+a+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="direccionclien'+a+'"  class="form-control infoemprendedor"> </td></tr>';
			$('#clientes').append(fila2);
		} else {
			Swal.fire(
				'Solo puedes agregar 10 Clientes Potenciales!',
				'Clic en el boton!',
				'warning'
			  )
		}
		
	});

	$('#TipoPersona').change(function() {
			if($('#TipoPersona option:selected').val() == 1) {
           	  $('#persona-fisica').show();  
           	  	$('#persona-moral').hide();              
             }
              else if($('#TipoPersona option:selected').val() == 2) { 
              	$('#persona-fisica').hide();
              	$('#persona-moral').show(); 
              }
          });

});

