<?php
if (!isset($_SESSION["validarIngreso"])) {
  # code...
    echo '<script>window.location = "index.php?pagina=ingreso";</script>';
    return;
  
}
else {
  if ($_SESSION["validarIngreso"] != "ok") {
    # code...
    echo '<script>window.location = "index.php?pagina=ingreso";</script>';
    return;
  }  
}


/* Creamos en las VISTAS un objeto que haga un llamado al CONTROLADOR */
$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);
/* echo '<pre>'; print_r($usuarios); echo '</pre>'; */


    
?>

<table class="table table-striped">
          <thead class="table-primary">
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Fecha</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
          
          <?php foreach ($usuarios as $key => $value): ?>
            
            <tr>
              <th><?php echo ($key+1); ?></th>
              <th><?php echo $value["nombre"]; ?></th>
              <td><?php echo $value["email"]; ?></td>
              <td><?php echo $value["fecha"]; ?></td>
              <td>
              <div class="btn-group">
                <a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>
                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
              </div>
              </td>
            </tr>
          
          <?php endforeach ?>
            
          </tbody>
        </table>