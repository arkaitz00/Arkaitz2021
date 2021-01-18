<?php

if(!isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['cerrarSesion'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
$oUsuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];

$numConexiones = $oUsuarioActual->getNumConexiones();
$descUsuario = $oUsuarioActual->getDescUsuario();
$ultimaConexion = $oUsuarioActual->getFechaHoraUltimaConexion();
$imagenUsuario = $oUsuarioActual->getImagenPerfil();

$vistaEnCurso = $vistas['inicio'];
require_once $vistas['layout'];

?>