<?php

class Conexion{

    static public function conectar(){
    
        #PDO("nombre del servidor; nombre de la base de datos","nombre del usuario","contraseña")
        #Para la conexion a la Base de datos
        
        # Local Connection
        /* $link = new PDO("mysql:host=localhost; dbname=curso-php", "root", ""); */
        
        # Remote Connection
        $link = new PDO("mysql:host=remotemysql.com; dbname=T0bzSbEUSz", "T0bzSbEUSz", "3EWxoimUV1");
        
        $link -> exec("set names utf8");
        
        return $link;
    }
}

?>