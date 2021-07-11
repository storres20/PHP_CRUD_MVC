<!-- Creamos en las VISTAS un objeto que haga un llamado al CONTROLADOR -->
<?php
$usuarios = ControladorFormularios::ctrSeleccionarRegistros();
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
                <button class="btn btn-warning"><i class="bi bi-pencil-fill"></i></button>
                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
              </div>
              </td>
            </tr>
          
          <?php endforeach ?>
            
          </tbody>
        </table>