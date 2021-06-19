<?php
include("logica-loginCliente.php");
logout();

//session_destroy();
header("Location: login-clienteView.php");
?>