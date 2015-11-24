$(document).ready(function(){
	function cambiarImagen() {	
		$.post("recursos/servicios/UltimaSesion.php",
		function (res) {
			console.log("res: " + res);
			$("#avatar").attr("src",res);
			console.log("se cambio la imagen");
		})	
	}
	
	cambiarImagen();	
	
	/*$(".btn").click(function(){

		var username = $("#username").val();
		var password = $("#password").val();

		var datos='&username='+username+'&password='+password;
		$.ajax({
			type:"POST",
			url:"recursos/servicios/Login.php",
			data:datos,
			success:function(html) {
				$("#alert").html(html);
				console.log("aqui");
				if(html === "no_errors") location.href = "inicio.php"
			}

		});
		return false;
	});*/
});