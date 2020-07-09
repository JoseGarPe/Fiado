<?php
if (isset($_POST['token'])) {
    session_start();
    $_SESSION['token']="Bearer ".$_POST['token'];
    $_SESSION['correo']=$_POST['email'];

//header ("Location: ../../informacionInvestigacion.html");

}
?>