<?php
if (isset($_GET["id"])) {
    # code...
    $item = "id";
    $valor = $_GET["id"];
    
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
}
?>

<div class="d-flex justify-content-center text-center">

<form class="p-5 bg-light border border-primary" method="post">
    <div class="form-group mb-3">
        
        <!--Insert ICON Bootstrap - start-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-person-fill" style="font-size: 1rem; color: cornflowerblue;"></i></span>
            </div>
            <input type="text" class="form-control" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre"> 
        </div>
        <!--Insert ICON Bootstrap - end-->
    </div>

    <div class="form-group mb-3">
        
        <!--Insert ICON Bootstrap - start-->
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-envelope-fill" style="font-size: 1rem; color: cornflowerblue;"></i></span>
        </div>
            <input type="email" class="form-control" value="<?php echo $usuario["email"]; ?>" placeholder="Escriba su email" id="email" name="actualizarEmail">
        </div>
        <!--Insert ICON Bootstrap - end-->
    </div>

    <div class="form-group mb-3">
        
        <!--Insert ICON Bootstrap - start-->
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-lock-fill" style="font-size: 1rem; color: cornflowerblue;"></i></span>
        </div>
            <input type="password" class="form-control" placeholder="Escriba su contraseña" id="pwd" name="actualizarPassword">
            
            <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">
            
            <input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">
            
        </div>
        <!--Insert ICON Bootstrap - end-->
    </div>

    <?php
    $actualizar = ControladorFormularios::ctrActualizarRegistro();
    
    if ($actualizar == "ok") {
        # code...
        
        # vamos a crear script javascript para que limpie cache - start
        echo '<script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        
        }
        </script>';
    
        echo '<div class="alert alert-success">El usuario ha sido actualizado</div>
        
        <script>
            setTimeout(function(){
                window.location = "index.php?pagina=inicio";
            
            },3000);                
        
        </script>
        
        ';
        # vamos a crear script javascript para que limpie cache - end
        
    }
    
    ?>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>