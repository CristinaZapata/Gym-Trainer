<?php
    session_start();

    if(empty($_SESSION['emailUsuario'])) {
        header('Location: login.php');
    }
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>GYM trainer</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- Script Pierna -->
			<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    	<!-- Script Abs -->
    		<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-2.css">
    	<!-- Script Arm -->
    		<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-3.css">
    	<!-- Script RutinaPierna -->
    		<link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-4.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    		<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">




	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	</script-->
	<!-- End WOWSlider.com HEAD section -->
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine8/style.css" />
	<!--script type="text/javascript" src="engine8/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section --></head>
	<body>

    <!-- Header -->
            <div id="header">

                <div class="top">

                <!-- Logo -->
                        <div id="logo">
                                <span class="image avatar48"><img id="imgIcon" src="images/avatar1.png" alt="" /></span>
                       
                                <h1 id="title"><?php echo $_SESSION['nombreUsuario'] . " ". $_SESSION['apellidoUsuario']; ?></h1>
                                <p><?php echo $_SESSION['emailUsuario']; ?></p>
                        </div>

                <!-- Nav -->
                        <nav id="nav">

                                <ul>
                                        <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Inicio</span></a></li>
                                        <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-dribbble">Rutinas</span></a></li>
                                        <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Videos</span></a></li>
                                        <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Perfil</span></a></li>
                                        <li><a href='recursos/servicios/CerrarSesion.php?cerrar=true' id="contact-link" class="skel-layers-ignoreHref"><span align="center">Cerrar Sesi&oacute;n</span></a></li>
                                </ul>
                        </nav>

                </div>

                <div class="bottom">

                    <!-- Social Icons -->
                            <ul class="icons">
                                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            </ul>
                </div>

            </div>

    <!-- Main -->
            <div id="main">

                    <!-- Intro -->
                            <section id="top" class="one dark cover">
                                    <div class="container">

	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->

	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container8">
	<div class="ws_images"><ul>
		<li><img src="data8/images/1.jpg" alt="" title="" id="wows8_0"/></li>
		<li><img src="data8/images/2.jpg" alt="" title="" id="wows8_1"/></li>
		<li><img src="data8/images/workou2.jpg" alt="workou2" title="workou2" id="wows8_2"/></li>
		<li><img src="data8/images/workout3.jpg" alt="workout3" title="workout3" id="wows8_3"/></li>
		<li><a href="http://wowslider.com/vi"><img src="data8/images/workout4.jpg" alt="slider" title="workout4" id="wows8_4"/></a></li>
		<li><img src="data8/images/workout7.jpg" alt="workout7" title="workout7" id="wows8_5"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title=""><span><img src="data8/tooltips/1.jpg" alt=""/>1</span></a>
		<a href="#" title=""><span><img src="data8/tooltips/2.jpg" alt=""/>2</span></a>
		<a href="#" title="workou2"><span><img src="data8/tooltips/workou2.jpg" alt="workou2"/>3</span></a>
		<a href="#" title="workout3"><span><img src="data8/tooltips/workout3.jpg" alt="workout3"/>4</span></a>
		<a href="#" title="workout4"><span><img src="data8/tooltips/workout4.jpg" alt="workout4"/>5</span></a>
		<a href="#" title="workout7"><span><img src="data8/tooltips/workout7.jpg" alt="workout7"/>6</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slider</a> by WOWSlider.com v8.6m</div>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine8/wowslider.js"></script>
	<script type="text/javascript" src="engine8/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

                                            <!--<header>
                                                    <h2 class="alt">Hi! I'm <strong>Prologue</strong>, a <a href="http://html5up.net/license">free</a> responsive<br />
                                                    site template designed by <a href="http://html5up.net">HTML5 UP</a>.</h2>
                                                    <p>Ligula scelerisque justo sem accumsan diam quis<br />
                                                    vitae natoque dictum sollicitudin elementum.</p>
                                            </header>-->

											<!--<div class="div1"><h2>Bienvenido</h2>
												<p></p>
											</div>
											<div id="sliderFrame">
												<div id="slider">
													<a href="http://www.menucool.com/javascript-image-slider" target="_blank">
														<img src="img/image-slider-1.jpg" alt="Welcome to Menucool.com" />
													</a>
													<img src="img/image-slider-2.jpg" alt="" />
													<img src="img/image-slider-3.jpg" alt="Pure Javascript. No jQuery. No flash." />
													<img src="img/image-slider-4.jpg" alt="#htmlcaption" />
													<img src="img/image-slider-5.jpg" />
												</div>
												<div id="htmlcaption" style="display: none;">
													<em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
												</div>
											</div>-->




                                            <footer>
                                                    <a href="#portfolio" class="button scrolly">Ir a mi perfil</a>
                                            </footer>

                                    </div>
                            </section>

                    

                    <!-- Rutinas -->
                            <section id="about" class="three">
                                    <div class="container">
                                            <header>
                                                    <h2>Mis Rutinas</h2>
                                            </header>
                                        <div id="introRut">
											<p id="intro">Hola, a&uacute;n no tienes rutinas asignadas, pasa a la secci&oacute;n de videos
											para conocer las rutinas que tenemos para ti :)
											</p></div>
											<div id="rutina1"><h3>Rutina 1</h3></div>
											<br>
											<br>
											<div id="rutina2"> <h3>Rutina 2</h3><br></div>
											 <br>
											 <div id="rutina3"><h3>Rutina 3</h3><br></div>
                                            <br>
                                        <div id="rutina4"><h3>Rutina 4</h3><br></div>
                                            <br>
                                        <div id="rutina5"><h3>Rutina 5</h3><br></div>
                                            <br>
                                        <!--button id="crearRutina" >Crear rutina</button-->
											 <!-- Rutinas Pierna >
											 <div id="Rpiernas">
											    <div id="amazingslider-wrapper-4" >
											        <div id="amazingslider-4" style="display:block;position:relative;">
														<div id="Lista">
															<ul class="amazingslider-slides" style="display:none;">
																<li><img src="images/T_HuY63HOJI.jpg" alt="Workout 3"  title="Workout 3" />
																<video preload="none" src="http://www.youtube.com/embed/T_HuY63HOJI?v=T_HuY63HOJI" ></video>
																</li>
															</ul>
														  </div>
														  <div id="Thumb">
											              	<ul class="amazingslider-thumbnails" style="display:none;">
																<li><img src="images/T_HuY63HOJI-tn.jpg" alt="Workout 3" title="Workout 3" /></li>
											            	</ul>
														  </div>
														</div>
											    </div>
   									<Rutinas Pierna -->

                                    </div>
                            </section>

                     <!-- Videos -->
                            <section id="contact" class="four">
                                    <div class="container" >

                                            <header>
                                                    <h2>Videos</h2>
                                            </header>

                                            <h3 align ='left'>Pierna</h3>
											<br>
                                            <!-- display the Pierna slider -->
											    <div id="amazingslider-wrapper-1">
											        <div id="amazingslider-1" style="display:block;position:relative;z-index:2;">
											            <ul class="amazingslider-slides" style="display:none;z-index:3;">
											                <li>
											                <img src="images/-sICMHs301M.jpg" alt="Workout 1"  title="Workout 1" />
											<!--a href="#WP1"><button class="as-btn-blue-medium">Agregar rutina</button></a-->
											                <video preload="none" src="http://www.youtube.com/embed/-sICMHs301M?v=-sICMHs301M" ></video>
											                </li>
											                <li><img src="images/k-sn0QRYNAs.jpg" alt="Workout 2"  title="Workout 2" />
											                <video preload="none" src="http://www.youtube.com/embed/k-sn0QRYNAs?v=k-sn0QRYNAs" ></video>
											                </li>
											                <li><img src="images/T_HuY63HOJI.jpg" alt="Workout 3"  title="Workout 3" />
											<!--button id="WP3" class="as-btn-blue-medium">Agregar a rutina</button-->
											                <video preload="none" src="http://www.youtube.com/embed/T_HuY63HOJI?v=T_HuY63HOJI" ></video>
											                </li>
											                <li><img src="images/idAnNSCsH2I.jpg" alt="Workout 4"  title="Workout 4" />
											<!--button id="WP4" class="as-btn-blue-medium">Agregar a rutina</button-->
											                <video preload="none" src="http://www.youtube.com/embed/idAnNSCsH2I?v=idAnNSCsH2I" ></video>
											                </li>
											            </ul>
											            <ul class="amazingslider-thumbnails" style="display:none;">
											                <li><img src="images/-sICMHs301M-tn.jpg" alt="Workout 1" title="Workout 1" />
											                	<input type="submit" value="Submit" style="z-index:10">
											                </li>
											                <li><img src="images/k-sn0QRYNAs-tn.jpg" alt="Workout 2" title="Workout 2" /></li>
											                <li><img src="images/T_HuY63HOJI-tn.jpg" alt="Workout 3" title="Workout 3" /></li>
											                <li><img src="images/idAnNSCsH2I-tn.jpg" alt="Workout 4" title="Workout 4" /></li>
											            </ul>
											      </div>
											   </div>
											   <div id="NV">
											   </div>
											    <!-- End Pierna -->
											    <!--button id="WP1" class="as-btn-blue-medium">Agregar video</button-->
											    <br><br>

											    <h3 align ='left'>Abdomen</h3><br>
													<div id="amazingslider-wrapper-2" >
															<div id="amazingslider-2" style="display:block;position:relative;">
																<ul class="amazingslider-slides" style="display:none;">
																	<li><img src="images/hxjKZcOT17E.jpg" alt="Ab Workout 1"  title="Ab Workout 1" data-description="lasjo iwoejoi wekr iuwehr wniejh iiuee wiy skdmjowie akslje" />
													<!--button class="as-btn-blue-medium">Agregar a rutina</button-->
																	<video preload="none" src="http://www.youtube.com/embed/hxjKZcOT17E?v=hxjKZcOT17E" ></video>
																	</li>
																	<li><img src="images/ZJ8Zdj0OPMI.jpg" alt="Ab Workout 2"  title="Ab Workout 2" data-description="jaknsd iwoehr kaslkjw wlejfoi oiwshdiwe khd" />
													<!--button id="WA2" class="as-btn-blue-medium">Agregar a rutina</button-->
																	<video preload="none" src="http://www.youtube.com/embed/ZJ8Zdj0OPMI?v=ZJ8Zdj0OPMI" ></video>
																	</li>
																	<li><img src="images/LebPal5gKrc.jpg" alt="Ab Workout 3"  title="Ab Workout 3" data-description="The 7 Best Ab Exercises" />
													<!--button id="WA3" class="as-btn-blue-medium">Agregar a rutina</button-->
																	<video preload="none" src="http://www.youtube.com/embed/LebPal5gKrc?v=LebPal5gKrc" ></video>
																	</li>
																	<li><img src="images/FH8Cuwkx7j8.jpg" alt="Ab Workout 4"  title="Ab Workout 4" data-description="20 Minute Ab Workout For Women & Men At Home Exercises No Equipment - Donnie Fitness" />
													<!--button id="WA4" class="as-btn-blue-medium">Agregar a rutina</button-->
																	<video preload="none" src="http://www.youtube.com/embed/FH8Cuwkx7j8?v=FH8Cuwkx7j8" ></video>
																	</li>
																</ul>
																<ul class="amazingslider-thumbnails" style="display:none;">
																	<li><img src="images/hxjKZcOT17E-tn.jpg" alt="Ab Workout 1" title="Ab Workout 1" /></li>
																	<li><img src="images/ZJ8Zdj0OPMI-tn.jpg" alt="Ab Workout 2" title="Ab Workout 2" /></li>
																	<li><img src="images/LebPal5gKrc-tn.jpg" alt="Ab Workout 3" title="Ab Workout 3" /></li>
																	<li><img src="images/FH8Cuwkx7j8-tn.jpg" alt="Ab Workout 4" title="Ab Workout 4" /></li>
																</ul>

														</div>
                                                    </div>
														<!-- End AB Slider -->
														<!--button id="WA1" class="as-btn-blue-medium">Agregar video</button-->
													<br><br>


											    	<h3 align ='left'>Brazo</h3><br>
											    	<div id="amazingslider-wrapper-3" >
													        <div id="amazingslider-3" style="display:block;position:relative;">
													            <ul class="amazingslider-slides" style="display:none;">
													                <li><img src="images/hAGfBjvIRFI.jpg" alt="Arm workout 1"  title="Arm workout 1" data-description="How To Lose Arm Fat" />
													<!--button class="as-btn-blue-medium">Agregar a rutinas</button-->
													                <video preload="none" src="http://www.youtube.com/embed/hAGfBjvIRFI?v=hAGfBjvIRFI" ></video>
													                </li>
													                <li><img src="images/oUychjqfO8I.jpg" alt="Arm Workout 2"  title="Arm Workout 2" data-description="Tank Top Arms Workout - Shoulders, Arms & Upper Back Workout" />
													<!--button id="WB2" class="as-btn-blue-medium">Agregar a rutina</button-->
													                <video preload="none" src="http://www.youtube.com/embed/oUychjqfO8I?v=oUychjqfO8I" ></video>
													                </li>
													                <li><img src="images/4pcaD3wInqM.jpg" alt="Arm Workout 3"  title="Arm Workout 3" data-description="Get Madonna&apos;s Arms With This 10-Minute Workout" />
													<!--button id="WB3" class="as-btn-blue-medium">Agregar a rutina</button-->
													                <video preload="none" src="http://www.youtube.com/embed/4pcaD3wInqM?v=4pcaD3wInqM" ></video>
													                </li>
													                <li><img src="images/zU9ig8oaU6E.jpg" alt="Arm Workout 4"  title="Arm Workout 4" data-description="Toned Arms Workout" />
													<!--button id="WB4" class="as-btn-blue-medium">Agregar a rutinas</button-->
													                <video preload="none" src="http://www.youtube.com/embed/zU9ig8oaU6E?v=zU9ig8oaU6E" ></video>
													                </li>
													            </ul>
													            <ul class="amazingslider-thumbnails" style="display:none;">
													                <li><img src="images/hAGfBjvIRFI-tn.jpg" alt="Arm workout 1" title="Arm workout 1" /></li>
													                <li><img src="images/oUychjqfO8I-tn.jpg" alt="Arm Workout 2" title="Arm Workout 2" /></li>
													                <li><img src="images/4pcaD3wInqM-tn.jpg" alt="Arm Workout 3" title="Arm Workout 3" /></li>
													                <li><img src="images/zU9ig8oaU6E-tn.jpg" alt="Arm Workout 4" title="Arm Workout 4" /></li>
													            </ul>

													    </div>
													    <!--button id="WB1" class="as-btn-blue-medium">Agregar video</button-->
                                                    </div>
   										 <!-- End Abs -->
										<br><br>
   										 <div id="AddVideos">
   										 	<h2 align ='left'>Agrega videos</h2><br>
											<ul>
											  <li><a id="PiernaRef" href="#Pierna">Pierna</a></li>
											  <li><a id="AbRef" href="#Abdominales">Abdominales</a></li>
											  <li><a id="BrazoRef" href="#Brazo">Brazo</a></li>
											</ul>
                                             
											<div id="General">
												<form>
													<table>
											    		<tr><td><input type="text" id="vidBuscar" placeholder="Buscar video..." required></td>
											        	<td><input type="button" value="Buscar" id="btnBuscar"></td></tr>
											        </table>
												</form>
                                                <div id="DivInicio"><h3>Selecciona una opción o busca un video :)</h3></div>
                                                <div id="NoRes"><h3>No se encontraron videos :(</h3></div>
												<div class="cuadro1">
													<img id="PI1" src="images/pruebas/-sICMHs301M.jpg" alt="P1" width='230'></img>
                                                    <p id="PP1">Quema 300 calorías en 30 minutos</p>
													<button id="Agregar1">Agregar</button>
													<a id="PA1" href="http://www.youtube.com/embed/-sICMHs301M?v=-sICMHs301M"><button>Ver video</button></a>
											    </div>
											    <div class="cuadro2">
													<img id="PI2" src="images/pruebas/k-sn0QRYNAs.jpg" alt="P2" width='230'></img>
                                                    <p id="PP2">Bikini Abs Workout, Bikini series</p>
													<button id="Agregar2">Agregar</button>
													<a id="PA2" href="http://www.youtube.com/embed/k-sn0QRYNAs?v=k-sn0QRYNAs"><button>Ver video</button></a>
											    </div>
											    <div class="cuadro3">
													<img id="PI3" src="images/pruebas/T_HuY63HOJI.jpg" alt="P3" width='230'></img>
                                                    <p id="PP3">Body Rock |Day 25 Upper Body Blast </p>
													<button id="Agregar3">Agregar</button>
													<a id="PA3" href="http://www.youtube.com/embed/T_HuY63HOJI?v=T_HuY63HOJI"><button>Ver video</button></a>
											    </div>
                                                        <div id="PNext" align="Right" style="text-decoration:underline;">Next</p></div>
                                                        <!--form>
													<table>
											    		<tr><td><div id="PPrev" align="Left" style="text-decoration:underline;">Prev</p></div></td>
											        	<td><div id="PNext" align="Right" style="text-decoration:underline;">Next</p></div></td></tr>
											        </table>
												</form-->
                                             <!--Layer Add Video-->
                                                <div id="layerAdd">
                                                    <h4>Añadir a rutina</h4></br>
                                                    <p>ID rutina 
                                                        <select id="rutina">
                                                            <!--option value="1">1</option>
                                                            <option value="2">2</option-->
                                                        </select></p>
                                                    <p id="respuesta"></p>
                                                    <form>
													   <table>
											    		<tr><td><input type="button" value="Añadir" id="aceptarAdd"></td>
											        	<td><input type="button" value="Cerrar" id="cancelarAdd"></td></tr>
											         </table>
												    </form>
                                                </div> 
											     
                                                 
                                            </div>


                                    </div>
                            </section>
                            
                            <!-- Perfil -->
                            <section id="portfolio" class="two">
                                    <div class="container">

 											<header>
 											
 											<h2 class="alt"><strong><?php echo $_SESSION['nombreUsuario'] . " ". $_SESSION['apellidoUsuario']; ?></strong></h2>
                                                    <p align="left">Correo electrónico: <span style="padding-left:30px"><input type="text" id="email" value="<?php echo $_SESSION['emailUsuario']; ?>" size="25"/></span><br/> <br/>
                                                    Contraseña:<span style="padding-left:95px"><input id="contrasena" type="password" value="<?php echo $_SESSION['passwordUsuario']; ?>"/> </span><br/><br/>
                                                    
                                                    <img id="avatar" src="images/girl1.png"/>
		
													<form id="formaPerfil" style="width: 500px" action="recursos/servicios/Perfil.php" method="post">
														Fecha de nacimiento:<span style="padding-left:15px"><input id="fecha_nac" name="fecha_nac" type="date"/></span><br/>
														Sexo:<br/>
															<input type="radio" class="radioBtnSexo" name="sexo" value="Femenino">Femenino<br/>
															<input type="radio" class="radioBtnSexo" name="sexo" value="Masculino">Masculino<br/>                                                   
														<br/>
														Altura: <input id="altura" name="altura" type="text" width="20"/> m<br/><br/>
														Peso: <span style="padding-left:20px"><input id="peso" name="peso" type="text" width="20"/> kg</span></p>
													
														<button id="registrarPerfil">Actualizar</button>
														<div id="alert" style="color:green;"></div>
                                                    </form>
													
													
													<div id="IMC">
														<p><strong>IMC:</strong></p>
														<div id="valorIMC"></div>
													</div>
													
                                            </header>
                                    </div>
                            </section>
            </div>
   

    <!-- Footer -->
            <div id="footer">

                    <!-- Copyright -->
                            <ul class="copyright">
                                    <li>&copy; GYM Trainer. All rights reserved.</li>
                            </ul>

            </div>

    <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollzer.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>
            <script src="js/controllerVideos.js"></script>

	<!-- Videos Scripts -->
			<!-- Pierna -->
            <script src="sliderengine/jquery.js"></script>
			<script src="sliderengine/amazingslider.js"></script>
			<script src="sliderengine/initslider-1.js"></script>
			<!-- Abs -->
    		<script src="sliderengine/initslider-2.js"></script>
			<!-- Arm -->
    		<script src="sliderengine/initslider-3.js"></script>
    		<!-- Rutina Pierna -->
    		<script src="sliderengine/initslider-4.js"></script>
    		<script src="assets/js/controller.js"></script>   
            <script src="js/controllerPerfil.js"></script>
            <script src="js/controllerUltimaSesion.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>

	</body>
</html>