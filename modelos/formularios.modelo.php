<?php

require_once "conexion.php";

class ModeloFormularios{

    /* ***************************************
    REGISTRO
    *************************************** */
    static public function mldRegistro($tabla, $datos){
    
        # statement : declaracion
        # prepare() Prepara una sentencia SQL para ser ejecutada por el metodo PDOStatement::execute(). La sentencia SQL puede contener cero o mas marcadores de parametros con nombre (:nombre) o signos de interrogacion (?) por los cuales los valores reales seran sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminado la necesidad de entrecomillar manualmente los parametros
        
        $stmt = Conexion::conectar() -> prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");
        
        # ¿Como enlazamos $datos con :nombre, :email, :password?
        # bindParam() Vincula una variable de PHP a un parametro de sustitucion con nombre o de signo de interrogacion correspondiente a la sentencia SQL que fue usada para preparar la sentencia
        
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            # code...
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        
        //$stmt -> close(); //para cerrar cualquier conexion que exista en ese momento
        $stmt = null; // vaciamos el objeto
    }
    
    /* ***************************************
    SELECCIONAR REGISTROS
    **************************************** */
    static public function mdlSeleccionarRegistros($tabla, $item, $valor){
    
        if ($item == null && $valor == null) {
            # code...
            $stmt = Conexion::conectar() -> prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC"); //ASC ascendente... DESC descendente
            $stmt->execute();
        
            return $stmt -> fetchAll(); // fetchAll() significa, devolver todos los registros ... fetch() devuelve UN solo registro
        }
        else{
            $stmt = Conexion::conectar() -> prepare("SELECT *,DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC"); //ASC ascendente... DESC descendente
            
            $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            
            $stmt->execute();
        
            return $stmt -> fetch(); // fetchAll() significa, devolver todos los registros ... fetch() devuelve UN solo registro                   
                    
        }
        
        $stmt = null;
    }
    
    /* ***************************************
    ACTUALIZAR REGISTRO
    *************************************** */
    static public function mdlActualizarRegistro($tabla, $datos){
    
        $stmt = Conexion::conectar() -> prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id=:id");
        
        
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        
        if ($stmt->execute()) {
            # code...
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        
        //$stmt -> close(); //para cerrar cualquier conexion que exista en ese momento
        $stmt = null; // vaciamos el objeto
    }
    
    
}

?>