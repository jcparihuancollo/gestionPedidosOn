
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Restaurante
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
                        <form action="<?php echo base_url();?>mantenimiento/restaurantes/update" method="POST">
                            
                            <input type="hidden" name="idRestaurante" value="<?php echo $restaurante->idRestaurante;?>">
                            
                            <div class="form-group <?php echo !empty(form_error('nombre')) ? 'has-error':'';?>">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo !empty(form_error('nombre')) ? set_value('nombre'):$restaurante->nombre?>">
                                <?php echo form_error("nombre","<span class='help-block'>","</span>");?>
                            </div>
                            


                            <div class="form-group <?php echo !empty(form_error('telefono')) ? 'has-error':'';?>">
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo !empty(form_error('telefono')) ? set_value('telefono'):$restaurante->telefono?>">
                                <?php echo form_error("telefono","<span class='help-block'>","</span>");?>
                            </div>
                            



                            <div class="form-group">
                                <label for="celular">Celular:</label>
                                <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $restaurante->celular?>">
                            </div>
                            
                          


                            <div class="form-group <?php echo !empty(form_error('direccion')) ? 'has-error':'';?>">
                                <label for="direccion">Direccion:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo !empty(form_error('direccion')) ? set_value('direccion'):$restaurante->direccion?>">
                                <?php echo form_error("direccion","<span class='help-block'>","</span>");?>
                            </div>
                            
                            <div class="form-group <?php echo !empty(form_error('stock')) ? 'has-error':'';?>">
                                <label for="horarioApertura">Horario de Apertura:</label>
                                <input type="text" class="form-control" id="horarioApertura" name="horarioApertura" value="<?php echo !empty(form_error('horarioApertura')) ? set_value('horarioApertura'):$restaurante->horarioApertura?>">
                                <?php echo form_error("horarioApertura","<span class='help-block'>","</span>");?>
                            </div>
                            
                            <div class="form-group">
                                <label for="horarioCierre">Horario de Cierre:</label>
                                <input type="text" class="form-control" id="horarioCierre" name="horarioCierre" value="<?php echo $restaurante->horarioCierre?>">
                            </div>

                              <div class="form-group">
                                <label for="fotoRestaurante">foto Restaurante:</label>
                                <input type="text" class="form-control" id="fotoRestaurante" name="fotoRestaurante" value="<?php echo $restaurante->fotoRestaurante?>">
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
