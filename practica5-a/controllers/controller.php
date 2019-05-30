<?php
    class MvcController(){
        public function plantilla(){

            //include () se utiliza para invocar el archivo que contiene el codigo html.
            include "views/template.php"
        }
        // interaccion y navegacion del usuario
        public function enlacesPaginasController(){
            if(isset($_GET["action"])){
                $enlacesController = $_GET["action"];

            }else{
                $enlacesController = "index";

            }
            //Mandar parametros a MODELO:
            $respuesta = EnlacesPaginas::enlacesPaginasModel(enlacesController);
            include $respuesta;



            
        }


    }
?>