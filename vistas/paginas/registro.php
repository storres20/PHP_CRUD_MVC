<div class="d-flex justify-content-center text-center">

<form class="p-5 bg-light border border-primary" method="post">
    <div class="form-group mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <!--Insert ICON Bootstrap - start-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-person-fill" style="font-size: 1rem; color: cornflowerblue;"></i></span>
            </div>
            <input type="text" class="form-control" id="nombre" name="registroNombre"> 
        </div>
        <!--Insert ICON Bootstrap - end-->
    </div>

    <div class="form-group mb-3">
        <label for="email" class="form-label">Correo electronico</label>
        <!--Insert ICON Bootstrap - start-->
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-envelope-fill" style="font-size: 1rem; color: cornflowerblue;"></i></span>
        </div>
            <input type="email" class="form-control" id="email" name="registroEmail">
        </div>
        <!--Insert ICON Bootstrap - end-->
    </div>

    <div class="form-group mb-3">
        <label for="pwd" class="form-label">Contraseña</label>
        <!--Insert ICON Bootstrap - start-->
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-lock-fill" style="font-size: 1rem; color: cornflowerblue;"></i></span>
        </div>
            <input type="password" class="form-control" id="pwd" name="registroPassword">
        </div>
        <!--Insert ICON Bootstrap - end-->
    </div>

    <?php
    
    /* ***************************************
    FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO NO ESTATICO
    *************************************** */
    
    /* $registro = new ControladorFormularios();
    $registro -> ctrRegistro(); */
    
    /* ***************************************
    FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO ESTATICO
    *************************************** */
    $registro = ControladorFormularios::ctrRegistro();
    
    if ($registro == "ok") {
        # code...
        # vamos a crear script javascript para que limpie cache - start
        echo '<script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            
            }
        </script>';
        
        echo '<div class="alert alert-success">El usuario ha sido registrado</div>';
        # vamos a crear script javascript para que limpie cache - end
    }
    
    ?>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>