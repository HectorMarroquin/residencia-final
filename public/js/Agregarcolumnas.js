	var i = 0; 
	function contador () {
		i += 1;
	}
	$(document).ready(function(){	
		$("#btnNuevointegrante").click(function(){
		contador();
	
		if (i < 5) {
			var fila='<tr> <td><input type="text" name="ApellidoPC"  class="form-control infoemprendedor"></td> <td><input type="text" name="ApellidoMC"  class="form-control infoemprendedor"></td><td><input type="text" name="NombreC"  class="form-control infoemprendedor"></td> <td><input type="text" name="CURPC"  class="form-control infoemprendedor"> </td></tr>';
			$('#integrantes').append(fila);
		} else {
			alert('Los Integrantes Maximos Son 5 Personas');
		}
	});

	

});

	$(document).ready(function(){
		$("#btnEliminarintegrante").click(function(){
			 $('tr').remove('#fila');
			 return false;

});


});
