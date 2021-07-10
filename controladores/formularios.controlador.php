<?php

class ControladorFormularios{

    /* ***************************************
    REGISTRO
    **************************************** */

    //public function ctrRegistro(){ // NO ESTATICO
    static public function ctrRegistro(){ // ESTATICO
    
        if (isset($_POST["registroNombre"])) {
            # code...
            //echo $_POST["registroNombre"]; // NO ESTATICO
            /* return $_POST["registroNombre"]."<br>".$_POST["registroEmail"]."<br>".$_POST["registroPassword"]."<br>"; // ESTATICO */
            
            // como respuesta de la base de datos por grabar correctamente los datos
            return "ok"; 
        }
    
    }

}



?>