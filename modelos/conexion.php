<?php

class Conexion{

    static public function conectar(){
    
        #PDO("nombre del servidor; nombre de la base de datos","nombre del usuario","contraseña")
        #Para la conexion a la Base de datos
    
        $link = new PDO("mysql:host=localhost; dbname=curso-php", "root", "");
        $link -> exec("set names utf8");
        
        return $link;
    }
}

?>