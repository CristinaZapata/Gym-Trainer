//Controller, Lee los campos del formulario y manda la petición al PHP

$(document).ready(function(){

	
		
		$("#registrarPerfil").click(function(){
				if($("input[type='radio'].radioBtnSexo").is(':checked')) {
			var sexo = $("input[type='radio'].radioBtnSexo:checked").val();
			//alert(sexo);
		}
		var fecha_nac = $('#fecha_nac').val();
			//var sexo = $('#sexo').val();
			var altura = $('#altura').val();
			var peso = $('#peso').val();
			
			console.log(sexo);
			
			if(fecha_nac!="" && sexo!="" && altura!="" && peso!=""){
				
				document.getElementById("formaPerfil").submit();
			}else
				alert("Los campos marcados con (*) son obligatorios");
				});
	});

