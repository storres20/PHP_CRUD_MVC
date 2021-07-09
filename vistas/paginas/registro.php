<form>
    <div class="form-group mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <!--Insert ICON Bootstrap - start-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="bi bi-person-fill" style="font-size: 1rem; color: cornflowerblue;"></i></span>
            </div>
            <input type="text" class="form-control" id="nombre"> 
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
            <input type="email" class="form-control" id="email">
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
            <input type="password" class="form-control" id="pwd">
        </div>
        <!--Insert ICON Bootstrap - end-->
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>