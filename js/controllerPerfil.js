//Controller, Lee los campos del formulario y manda la petición al PHP

$(document).ready(function(){
	
	$("#email, #contrasena").attr("disabled", true);
		
	$("#registrarPerfil").click(function(){
			
		if($("input[type='radio'].radioBtnSexo").is(':checked')) {
			var sexo = $("input[type='radio'].radioBtnSexo:checked").val();
		}
		
		var fecha_nac = $('#fecha_nac').val();
		var altura = $('#altura').val();
		var peso = $('#peso').val();
		
		var imc = peso / (altura * altura);
		console.log(imc);
		$("#valorIMC").html(imc);
		
		if(fecha_nac!="" && sexo!="" && altura!="" && peso!=""){				
			//document.getElementById("formaPerfil").submit();
			
			var datos='&fecha_nac='+fecha_nac+'&sexo='+sexo+'&altura='+altura+'&peso='+peso;
                    
			$.ajax({
				type:"POST",
				url:"recursos/servicios/Perfil.php",
				data:datos,
				success:function(html) {
					$("#alert").html(html);
					console.log("se paso perfil a BD");
					//if(html === "no_errors") location.href = "inicio.php"
				},
                error: function(html) {
					$("#alert").html(html);
					console.log("se paso perfil a BD");
					//if(html === "no_errors") location.href = "inicio.php"
				}

			});
			return false;
			
		}else{
			$("#alert").text("Se deben llenar todos los campos");
		}
		
		//$("#valorIMC").html("29");
		
		/*var response = '';
        $.ajax({ type: 'POST',   
                 url: "recursos/servicios/IMC.php",   
                 async: false,
                 success : function(text){
                    $('#valorIMC').html(text);
                }
        });
	});*/
	
	/*function cambiarIMC() {	
		$.post("recursos/servicios/IMC.php",
		function (res) {
			console.log("res: " + res);
			$("#valorIMC").html(res);
			console.log("se cambio el IMC");
		})	
	}
	
	cambiarIMC();*/


		/*if(sexo == "Femenino"){
			$("#imgIcon").attr("src", "images/avatar2.png");
		}else{
			if(sexo == "Masculino"){
				$("#imgIcon").attr("src", "images/avatar2.png");
			}
		}*/
		
	});
});