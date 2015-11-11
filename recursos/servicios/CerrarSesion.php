<?php

  function cerrarSesion() {
   	session_start();
   	// remove all session variables
   	session_unset();
   	// destroy the session
   	session_destroy();
	header('Location: ../../index.html');
  }

  if (isset($_GET['cerrar'])) {
    cerrarSesion();
  }

?>