<?php
include("logica-loginAdm.php");
logout();

//session_destroy();
header("Location: login-admView.php");
?>