<form method="post" action="<?php echo base_url('index.php/registry/createUser/') ?>">
  <div class="form-group">
    <label for="fullname">Nombre completo</label>
    <input  type="text" name="fullname" class="form-control" id="fullname" aria-describedby="fullname" required>
  </div>
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="email" required>
  </div>
  <div class="form-group">
    <label for="cellphone">Celular</label>
    <input  type="text" name="cellphone" class="form-control" id="cellphone" aria-describedby="cellphone" required>
  </div>
  <div class="form-group">
    <label for="identification">Identificación</label>
    <input type="text" name="identification" class="form-control"  id="identification" aria-describedby="identification" required>
  </div>


  <button onclick="location.href='log'" class="btn btn-success">Regresar</button>
  <button type="submit" class="btn btn-primary">Registrarme</button>

</form>

