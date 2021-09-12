
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuario
        <small>Editar</small>
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
                        <form action="<?php echo base_url();?>mantenimiento/usuarios/update" method="POST">
                            <input type="hidden" name="idUsuario" value="<?php echo $usuario->idUsuario;?>">
                            
                            <div class="form-group <?php echo !empty(form_error('nombres')) ? 'has-error':'';?>">
                                <label for="nombres">Nombre:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo !empty(form_error('nombres')) ? set_value('nombres'):$usuario->nombres?>">
                                <?php echo form_error("nombres","<span class='help-block'>","</span>");?>
                            </div>
                            
                            <div class="form-group <?php echo !empty(form_error('apellidoPaterno')) ? 'has-error':'';?>">
                                <label for="apellidoPaterno">Ap. Paterno:</label>
                                <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" value="<?php echo !empty(form_error('apellidoPaterno')) ? set_value('apellidoPaterno'):$usuario->apellidoPaterno?>">
                                <?php echo form_error("apellidoPaterno","<span class='help-block'>","</span>");?>
                            </div>
                            
                            <div class="form-group">
                                <label for="celular">Celular:</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $usuario->celular?>">
                            </div>
                            
                            <div class="form-group <?php echo !empty(form_error('fotoUsuario')) ? 'has-error':'';?>">
                                <label for="fotoUsuario">Foto de Usuario:</label>
                                <input type="text" class="form-control" id="fotoUsuario" name="fotoUsuario" value="<?php echo !empty(form_error('fotoUsuario')) ? set_value('fotoUsuario'):$usuario->fotoUsuario?>">
                                <?php echo form_error("fotoUsuario","<span class='help-block'>","</span>");?>
                            </div>
                            
                            <div class="form-group ">
                                <label for="stock">nombreUsuario:</label>
                                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="<?php echo !empty(form_error('stock')) ? set_value('stock'):$usuario->nombreUsuario?>">
                                <?php echo form_error("stock","<span class='help-block'>","</span>");?>
                            </div>

                            <div class="form-group ">
                                <label for="stock">contrasena:</label>
                                <input type="text" class="form-control" id="contrasena" name="contrasena" value="<?php echo !empty(form_error('contrasena')) ? set_value('contrasena'):$usuario->contrasena?>">
                                <?php echo form_error("contrasena","<span class='help-block'>","</span>");?>
                            </div>
                            
                            <div class="form-group">
                                <label for="rol">Rol:</label>
                                <select name="rol" id="rol" class="form-control">
                                    <?php foreach($roles as $rol):?>
                                        <?php if($rol->idRol == $rol->idRol):?>
                                        <option value="<?php echo $rol->idRol?>" selected><?php echo $rol->nombre;?></option>
                                    <?php else:?>
                                        <option value="<?php echo $rol->idRol?>"><?php echo $rol->nombre;?></option>
                                        <?php endif;?>
                                    <?php endforeach;?>
                                </select>
                            </div>

                             <div class="form-group">
                                <label for="restaurantes">Restaurantess</label>
                                <select name="restaurante" id="restaurante" class="form-control">
                                    <?php foreach($restaurantes as $restaurante):?>
                                        <?php if($restaurante->idRestaurante == $restaurante->idRestaurante):?>
                                        <option value="<?php echo $restaurante->idRestaurante?>" selected><?php echo $restaurante->nombre  ;?></option>
                                         <?php else:?>
                                        <option value="<?php echo $restaurante->id?>"><?php echo $restaurante->nombre;?></option>
                                        <?php endif;?>
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
