
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuarios
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar usuarios</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>nombres</th>
                                    <th>apellido Paterno</th>
                                    <th>celular</th>
                                    <th>email</th>
                                    <th>foto de Usuario</th>
                                    <th>nombre de Usuario</th>
                                    <th>contrasena</th>
                                    <th>Rol</th>
                                    <th>Restaurante</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuarios)):?>
                                    <?php foreach($usuarios as $usuario):?>
                                        <tr>
                                           
                                            <td><?php echo $usuario->nombres;?></td>
                                            <td><?php echo $usuario->apellidoPaterno;?></td>
                                            <td><?php echo $usuario->celular;?></td>
                                            <td><?php echo $usuario->email;?></td>
                                            <td><?php echo $usuario->fotoUsuario;?></td>
                                            <td><?php echo $usuario->nombreUsuario;?></td>
                                            <td><?php echo $usuario->contrasena;?></td>
                                            <td><?php echo $usuario->rol;?></td>
                                            <td><?php echo $usuario->restaurante;?></td>

                                                  <?php $datausuarios = $usuario->nombres."*".$usuario->apellidoPaterno."*".$usuario->celular."*".$usuario->email."*".$usuario->nombreUsuario."*".$usuario->fotoUsuario."*".$usuario->contrasena."*".$usuario->rol."*".$usuario->restaurante;?> 
                                         
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $datausuarios;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                   
                                                    <a href="<?php echo base_url()?>mantenimiento/usuarios/edit/<?php echo $usuario->idUsuario;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                   
                                                    <a href="<?php echo base_url();?>mantenimiento/usuarios/delete/<?php echo $usuario->idUsuario;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title">Informacion de la Categoria</h4>


      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrrrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
