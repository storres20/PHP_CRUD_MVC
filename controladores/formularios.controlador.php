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
            //return "ok"; 
            ## Estos parametros se guardan para ser pasados a MODELO para ser enviados a la base de datos
            $tabla = "registros";
            
            $datos = array("nombre" => $_POST["registroNombre"],
                           "email" => $_POST["registroEmail"],
                           "password" => $_POST["registroPassword"]);
            
            # ¿Como paso estos datos al MODELO?... Vamos a instanciar mldRegistro
            $respuesta = ModeloFormularios::mldRegistro($tabla, $datos);
            # El valor obtenido se almacena en $respuesta
            
            return $respuesta; // se devuelve a la VISTA
            
            # ¿Como?
            # en la VISTA (vista/registro.php) se tiene este codigo $registro = ControladorFormularios::ctrRegistro();
            # el cual espera una RESPUESTA de este archivo en que estamos y asi almacenarlo en $registro
            # $registro <- $respuesta
            
            # Nota: $respuesta depende mucho de lo que traiga el MODELO ModeloFormularios::mldRegistro($tabla, $datos);
        }
    }
    /* ***************************************
    SELECCIONAR REGISTROS
    **************************************** */
    static public function ctrSeleccionarRegistros(){
    
        $tabla = "registros";
        
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, null, null);
        
        return $respuesta;
    }
    
    /* ***************************************
    INGRESO
    **************************************** */
    public function ctrIngreso(){
    
        if (isset($_POST["ingresoEmail"])) {
        
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];
        
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
            
            if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {
                # code...
                
                $_SESSION["validarIngreso"] = "ok";
                
                /* echo "Ingreso exitoso"; */
                
                echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
                window.location = "index.php?pagina=inicio";
                
                </script>';
            }
            else{
                # vamos a crear script javascript para que limpie cache - start
                echo '<script>
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                }
                </script>';
                
                echo '<div class="alert alert-danger">El usuario no esta registrado</div>';
                # vamos a crear script javascript para que limpie cache - end
            }
        
        }
    
    }
    
}



?>