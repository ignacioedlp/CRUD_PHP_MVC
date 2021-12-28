

<a name="" id="" class="btn btn-secondary my-2" href="?controller=empleados&action=crear" role="button">Agregar empleado</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($empleados as $empleado){ ?>
    <tr>
      <td scope="row"><?php echo $empleado->id; ?></td>
      <td><?php echo $empleado->nombre; ?></td>
      <td><?php echo $empleado->correo; ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="">
          <a name="" id="" class="btn btn-warning mr-1" href="?controller=empleados&action=editar&id=<?php echo $empleado->id?>" role="button">Editar</a>
          <a name="" id="" class="btn btn-danger" href="?controller=empleados&action=borrar&id=<?php echo $empleado->id?>" role="button">Borrar</a>
        </div>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
