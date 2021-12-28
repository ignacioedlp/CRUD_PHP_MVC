<div class="card">
  <div class="card-header">
    Editar empleado
  </div>
  <div class="card-body">
    <form action="" method="post">

      <div class="mb-3">
        <label for="id" class="form-label">Id:</label>
        <input type="number" value="<?php echo $empleado->id; ?>"  class="form-control" name="id" id="" aria-describedby="helpId" placeholder="Nombre">
      </div>

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" value="<?php echo $empleado->nombre; ?>"  class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="Nombre">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" value="<?php echo $empleado->correo; ?>" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Email">
       
      </div>

      <button type="submit" class="btn btn-primary">Editar</button>

    </form>
  </div>
</div>