$(document).ready(function(){
	$(".btn").click(function(){

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
	});
});