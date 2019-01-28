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

	

});

	$(document).ready(function(){
		$("#btnEliminarintegrante").click(function(){
			$('#fila'+i).remove();
			return false;
			i -= 1;
	});


});
