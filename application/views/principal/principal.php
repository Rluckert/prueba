<div class="text-right" style="margin-top: 5px; margin-bottom: 5px;">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddUser"><i class="fas fa-plus-circle"></i> Añadir caso </button>
</div>

<!-- Modal add user form begin -->
<div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Añadir caso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $data = array('onsubmit' => "return validarCampos()");?>
        <?= form_open('/Home/createCase', $data); ?>
        <?php

        $motivo = array(
          'name' => 'reason',
          'placeholder' => 'Motivo',
          'type' => 'text',
          'class' => 'form-control input-lg phcenter',
          'required' => ''
        );

        $direccion = array(
          'name' => 'address',
          'placeholder' => 'Dirección',
          'type' => 'text',
          'class' => 'form-control input-lg phcenter',
          'required' => ''
        );
        
        $registrarme = array(
          'name' => 'Registrar',
          'class' => 'btn btn-primary',
          'value' => 'Añadir'
        );
        ?>

        <?= form_input($motivo) ?>
        <br>

        <?= form_input($direccion) ?>
        <br>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
      <?= form_close(); ?>
    </div>
  </div>
</div>
<!-- Modal form end -->

<!-- Table customers -->
<div class="table-responsive">
  <table class="table table-bordered table-hover table-principal">
    <thead class="thead-dark">
      <tr>
        <th scope="col">
          <h5 class="text-center">Consecutivo</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Motivo</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Dirección</h5>
        </th>
        <th scope="col">
          <h5 class="text-center">Acciones</h5>
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($cases->result() as $case) { ?>
        <tr>
          <td>
            <center><?= $case->id; ?></center>
          </td>
          <td>
            <center><?= $case->reason; ?></center>
          </td>
          <td>
            <center><?= $case->address; ?></center>
          </td>
          <td>
            <center>
              <a class="btn btn-danger btn-sm" href="<?= base_url('index.php/Home/deleteCase/') . $case->id ?>" role="button"><i class="fas fa-trash"></i></a>
            </center>
          </td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
  <!-- Table customers end-->

  <!-- Modal update user form begin -->
  <div class="modal fade" id="updateUser" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modificar estado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form action="#" method="post" accept-charset="utf-8" id="updateForm">

            <input id="inputName" type="text" name="Name" placeholder="Nombre" class="form-control input-lg phcenter" required="">
            <br>

            <input id="inputLastName" type="text" name="LastName" placeholder="Apellido" class="form-control input-lg phcenter" required="">
            <br>

            <input id="inputIdentification" type="text" name="Identification" placeholder="Número de documento" class="form-control input-lg phcenter" required="">
            <br>

            <input id="inputEmail" type="email" name="Email" placeholder="Correo" class="form-control input-lg phcenter" required="">
            <br>

            <select name="Gender" class="form-control" id="select-gender">
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
            <br>

            <input id="inputDate" type="date" name="Birthdate" max="<?= date("Y-m-d") ?>" placeholder="Fecha de nacimiento" class="form-control input-lg phcenter" max="2019-07-31" required="">
            <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal update user form end -->