<div class="d-flex justify-content-center text-center">

<form class="p-5 bg-light border border-primary" method="post">
    
    

    <div class="form-group mb-3">
        <label for="email" class="form-label">Correo electronico</label>
        <!--Insert ICON Bootstrap - start-->
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-envelope-fill" style="font-size: 1rem; color: cornflowerblue;"></i></span>
        </div>
            <input type="email" class="form-control" id="email" name="ingresoEmail">
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
            <input type="password" class="form-control" id="pwd" name="ingresoPassword">
        </div>
        <!--Insert ICON Bootstrap - end-->
    </div>

    <?php
    
   
    $ingreso = new ControladorFormularios(); // NO estatico
    $ingreso -> ctrIngreso();
    
    ?>

    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
</div>