<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Usuarios
      <small>Panel de control de usuarios</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
      <li class="active">Tablero</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="box">

      <div class="box-header with-border">
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          Agregar usuario 
        </button>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped dtable">
          <thead>
            <tr>
              <th style="width:10px">#</th>
              <th>Nombre</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Ultimo login</th>
                <th>Acciones</th>
              </th>
            </tr>

          </thead>
          <tbody>
            <tr>
              <td>1</td>
              
                <td>Usuario Administrado</td>
                <td>Admin</td>
                <td><img src="views/img/users/default/anonymous.png" alt=""></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs "> Activado</button></td>
                <td>2017-12-11 12:05:32</td>
              <td>
              <div class="btn-group">
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
              
            </td>

            </tr>
            </div>
          </tbody>
        </table>
      </div>

      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form action="form" method="post" enctype="multipart/form-data">
      <div class="modal-header" style="background: ">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div class="box-body">
          
          <!--Nombre de Usuario -->
          <div class="">
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>

  </div>