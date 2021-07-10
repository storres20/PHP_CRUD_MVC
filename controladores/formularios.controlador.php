<?php

class ControladorFormularios{

    /* ***************************************
    REGISTRO
    **************************************** */

    public function ctrRegistro(){
        
        if (isset($_POST["registroNombre"])) {
            # code...
            echo $_POST["registroNombre"];
        }
    
    }

}










?>