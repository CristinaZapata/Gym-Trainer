<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/controller.js"></script>

	<link rel="stylesheet" href="assets/css/registro.css"></link>

<meta charset="UTF-8">

<title>Registro</title>

</head>

<body>
	<div class="logo"></div>
	<div class="login-block">
		<h1>Registro</h1>
		<div id="alert" style="color:red;"></div>
		<div class="warn" id="warning" style="color:red;"></div>
		<div class="warn" id="warningE" style="color:red;"></div><br/>
		<form name="myForm">
			<input type="text" maxlength="40" placeholder="Nombre" id="nombre" name="nombre" class="required"/>
			<input type="text" maxlength="60" placeholder="Apellidos" id="apellidos" name="apellidos" class="required"/>
			<input type="text" maxlength="40" placeholder="Email" id="username" name="username" class="required"/>
			<input type="password" maxlength="10" placeholder="Contrase&ntilde;a" id="password" name="password" class="required" style="margin-bottom: 0px;"/><div id="pass_result"></div>
			<input type="password" maxlength="10" placeholder="Repite tu contrase&ntilde;a" id="password2" name="password2" class="required"/>
			<button class="btn">Ingresar</button>
		</form>
		<a href="login.php">&iquest;Ya est&aacute;s registrado? Da click aqu&iacute;</a>
	</div>
</body>

</html>