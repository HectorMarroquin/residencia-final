var i = 0; 
	function sumador () {
		i += 1;
	}
$(document).ready(function(){	
	$("#compet").click(function(){
		sumador();
		if (i < 11) {
			var fila='<tr><td><input type="text" name="nombrecompe'+i+'"  class="form-control infoemprendedor"></td><td colspan="2"><input type="text" name="giro'+i+'"  class="form-control infoemprendedor"></td> <td><input type="text" name="direccioncompe'+i+'"  class="form-control infoemprendedor"> </td></tr>';
			$('#competencia').append(fila);
		} else {
			alert('Maximos Son 10 Competencia');
		}
		
	});
});

