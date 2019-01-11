$(document).ready(function()
		{
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
 })