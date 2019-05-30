<?php
    //el index: en el mostraremos la salida de las vistas al usuario y tambien a traves de el 
    //enviaremos las distintas acciones que el usuario envie al controlador
    require_once "controllers/controller.php"
    require_once "models/model.php"


    $mvc= new MvcController();
    $mvc-> plantilla();
?>