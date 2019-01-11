var i = 0; 
	function sumador () {
		i += 1;
	}
$(document).ready(function(){	
	$("#compet").click(function(){
		sumador();
		if (i < 20) {
			var fila='<tr><td><input type="text" name="nombreclien"  class="form-control infoemprendedor"></td><td colspan="2"><input type="text" name="giroclien"  class="form-control infoemprendedor"></td> <td><input type="text" name="direccionclien"  class="form-control infoemprendedor"> </td></tr>';
			$('#competencia').append(fila);
		} else {
			alert('Maximos Son 20 Competencia');
		}
		
	});
});

