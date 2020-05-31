<?php 
      include_once 'funciones/sesiones.php';
      include_once 'funciones/funciones.php';
      include_once 'templates/header.php'; 
      include_once 'templates/barra.php';
      include_once 'templates/navegacion.php';
?>


 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Invitados
        <small>llena el formulario para crear un invitado</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
        
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Crear Invitado</h3>
                </div>
                <div class="box-body">
                    <!-- form start -->
                    <form role="form" name="guardar-registro" id="guardar-registro-archivo" method="post" action="modelo-invitado.php" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nombre-invitado">Nombre: </label>
                                <input type="text" class="form-control" id="nombre-invitado" name="nombre-invitado" placeholder="Nombre del invitado">
                            </div>
                            <div class="form-group">
                                <label for="apellido-invitado">Apellido: </label>
                                <input type="text" class="form-control" id="apellido-invitado" name="apellido-invitado" placeholder="Apellido del Invitado">
                            </div>
                            <div class="form-group">
                                <label for="biografia-invitado">Biografia</label>
                                <textarea class="form-control" name="biografia-invitado" id="biografia-invitado" rows="8" placeholder="Biografia"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imagen-invitad">Imagen</label>
                                <input class="form-control" type="file" id="imagen-invitado" name="imagen-invitado">

                                <p class="help-block">Añada la imagen del invitado aquí</p>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        
                        <div class="box-footer">
                            <input type="hidden" name="registro" value="nuevo">
                            <button type="submit" class="btn btn-primary" id="crear-registro">Añadir</button>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->

      </div>
    </div>


  </div>
  <!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?>

  