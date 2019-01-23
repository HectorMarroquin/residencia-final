var a = 0; 
	function contadorr () {
		a += 1;
	}

$(document).ready(function(){	
	$("#client-pot").click(function(){
		contadorr();
		if (a < 11) {
			var fila='<tr><td><input type="text" name="nombreclien'+a+'"  class="form-control infoemprendedor"></td><td colspan="2"><input type="text" name="giroclien'+a+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="direccionclien'+a+'"  class="form-control infoemprendedor"> </td></tr>';
			$('#clientes').append(fila);
		} else {
			alert('Maximos Son 10 Clientes Potenciales');
		}
		
	});
});

