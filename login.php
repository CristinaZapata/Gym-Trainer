<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/controllerLogin.js"></script>
<meta charset="UTF-8">

<title>Inicio de sesión</title>
<style>
body {
    /*background: url('https://farm9.staticflickr.com/8522/8680890868_4f1dcbf13c_o_d.jpg') no-repeat fixed center center;*/
    background-image: url("images/runLogin.jpg");
    background-size: cover;
    font-family: Montserrat;
}
a{
    font-weight: normal;
    font-size: 11px;
    color:gray;
    text-align:center;
}

.logo {
    width: 213px;
    height: 36px;
    /*background: url('http://i.imgur.com/fd8Lcso.png') no-repeat;*/
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    /*border-top: 5px solid #3498db;*/
    border-top: 5px solid #1abc9c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #1fefc5;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #1abc9c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #1abc9c;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #1fefc5;
}

</style>

</head>

<body>

<div class="logo"></div>
<div class="login-block">
    <h1>Inicio de sesión</h1>
    <form>
		<input type="text" placeholder="Email" id="username" name="username"/>
		<input type="password" placeholder="Contraseña" id="password" name="password"/>
		<button class="btn" id="btn">Ingresar</button>
		<div id="alert" style="color:red;"></div>
	</form>

    <a href="registro.php">¿No estás registrado? Da click aquí</a>
</div>
</body>

</html>