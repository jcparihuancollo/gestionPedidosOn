
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuario
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/usuarios/store" method="POST">
                            <div class="form-group <?php echo !empty(form_error('codigo')) ? 'has-error':'';?>">
                                <label for="nombres">nombres:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo set_value('nombres');?>">
                                <?php echo form_error("nombres","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group <?php echo !empty(form_error('apellidos')) ? 'has-error':'';?>">
                                <label for="apellidoPaterno">apellidoPaterno:</label>
                                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="<?php echo set_value('apellidoPaterno');?>">
                                <?php echo form_error("apellidoPaterno","<span class='help-block'>","</span>");?>
                            </div>
                            
                            <div class="form-group ">
                                <label for="celular">Celular:</label>
                                <input type="text" class="form-control" id="celular" name="celular">
                            </div>
                            
                            <div class="form-group <?php echo !empty(form_error('email')) ? 'has-error':'';?>">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?php echo set_value('email');?>">
                                <?php echo form_error("email","<span class='help-block'>","</span>");?>
                            </div>

                            <div class="form-group <?php echo !empty(form_error('fotoUsuario')) ? 'has-error':'';?>">
                                <label for="fotoUsuario">fot usuario</label>
                                <input type="text" class="form-control" id="fotoUsuario" name="fotoUsuario" value="<?php echo set_value('fotoUsuario');?>">
                                <?php echo form_error("fotoUsuario","<span class='help-block'>","</span>");?>
                            </div>

                            <div class="form-group <?php echo !empty(form_error('nombreUsuario')) ? 'has-error':'';?>">
                                <label for="nombreUsuario">usuario</label>
                                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="<?php echo set_value('nombreUsuario');?>">
                                <?php echo form_error("nombreUsuario","<span class='help-block'>","</span>");?>
                            </div>
                               <div class="form-group <?php echo !empty(form_error('contrasena')) ? 'has-error':'';?>">
                                <label for="contrasena">contraseña</label>
                                <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?php echo set_value('contrasena');?>">
                                <?php echo form_error("contrasena","<span class='help-block'>","</span>");?>
                            </div>
                            
                              <div class="form-group">
                                <label for="rol">Rol</label>
                                <select name="rol" id="rol" class="form-control">
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->idRol?>"><?php echo $rol->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                             </div>

                            <div class="form-group">
                                <label for="nombreRes">Restaurante</label>
                                <select name="nombreRes" id="nombreRes" class="form-control">
                                    <?php foreach($restaurantes as $nombreRes):?>
                                        <option value="<?php echo $nombreRes->idRestaurante?>"><?php echo $nombreRes->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>

                      

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
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
