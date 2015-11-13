$(document).ready(function(){
	$(".btn").click(function(){
		console.log("click");
		var nombre = $("#nombre").val();
		var apellidos = $("#apellidos").val();
		var username = $("#username").val();
		var password = $("#password").val();
		var password2 = $("#password2").val();

		var datos='nombre='+nombre+'&apellidos='+apellidos+'&username='+username+'&password='+password+'&password2='+password2;
		$.ajax({
			type:"POST",
			url:"recursos/servicios/Registro.php",
			data:datos,
			success:function(html) {
				$("#alert").html(html);
				console.log("aqui");
				validation();
				if(html === "no_errors") location.href = "login.php"
			}

		});
		return false;
	});
});

function validarEmail(email){
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	return reg.test(email);
};

function nivelPass(campo, salida) {
    pswd = document.getElementById(campo).value;
    nivel_psw = 0;
    salida_val = '';
    if (pswd.match(/[a-z]/g)) {
        nivel_psw++;
    }
    if (pswd.match(/[A-Z]/g)) {
        nivel_psw++;
    }
    if (pswd.match(/[0-9]/g)) {
        nivel_psw++;
    }
    if (pswd.length < 5) {
        if(nivel_psw >= 1) nivel_psw--;
    } else if (pswd.length >= 20) {
        nivel_psw++;
    }
    switch (nivel_psw) {
        case 1:
        	salida_val='Weak';
        	break;
        case 2:
        	salida_val='Normal';
        	break;
        case 3:
        	salida_val='Strong';
        	break;
        case 4:
        	salida_val='Very strong';
        	break;
        default:
        	salida_val='Very weak';
        	break;
    }
    if (document.getElementById(salida).value != nivel_psw) {
        document.getElementById(salida).value = nivel_psw;
        document.getElementById(salida).innerHTML = salida_val;
    }
    return 1;
};

function validation(){
	$('input').css('border', '');
	listaErrores = '';
	var missingRequiredField = false;
	nivelPass('password', 'pass_result');

	$('.required').each(function() {
		if ($(this).val() == '') {
			$(this).css('border', '2px solid red');
			missingRequiredField = true;
		}
	});

	if ($('#password').val() != $('#password2').val()) {
		listaErrores += 'Las contrase&ntilde;as no coinciden.<br />';
	}

	if (missingRequiredField) {
		listaErrores += 'Se deben llenar todos los campos.<br />';
	}

	if (!validarEmail($('#username').val())) {
		$('#username').css('border', '2px solid red');
		listaErrores += 'Escriba un email v&aacute;lido.<br />';
	}

	if (listaErrores) {
		$("#warningE").css('opacity', '1').html(listaErrores);
		return false;
	}

	return true;

}



