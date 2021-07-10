<?php

# El INDEX: En él mostraremos la salida de las vistas al usuario y tambien a traves de él enviaremos las distintas acciones que el usuario envie al Controlador

# En la carpeta VISTAS se crea plantilla.php, en el cual se copia todo el contenido de index.html

# ¿Como hago para cargar el contenido de plantilla.php en index.ph?
# se crea plantilla.controlador.php y se crean clases y metodos de llamada

#require() establece que el codigo del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la funcion require() no se encuentra, saltará un error "PHP Fatal error" y el programa PHP se detendrá.

#La version require_once() funciona de la misma forma que su respectivo, salvo que, al utilizar la version_once, se impide la carga de un mismo archivo mas de una vez

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";

# para INSTANCIAR una CLASE se usa la palabra NEW
$plantilla = new ControladorPlantilla();

# para ejecutar el METODO que se encuentra dentro de la CLASE
$plantilla -> ctrTraerPlantilla();



?>