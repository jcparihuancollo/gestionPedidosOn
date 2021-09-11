
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Restaurante
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
                        <form action="<?php echo base_url();?>mantenimiento/restaurantes/store" method="POST">
                         
                            <div class="form-group <?php echo !empty(form_error('nombre')) ? 'has-error':'';?>">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre');?>">
                                <?php echo form_error("nombre","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group ">
                                <label for="Teléfono">Teléfono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                             <div class="form-group ">
                                <label for="Celular">Celular:</label>
                                <input type="text" class="form-control" id="celular" name="celular">
                            </div>
                             <div class="form-group ">
                                <label for="Dirección">Dirección:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion">
                            </div>



                            <div class="form-group <?php echo !empty(form_error('precio')) ? 'has-error':'';?>">
                                <label for="Horario de Apertura">Horario Apertura:</label>
                                <input type="text" class="form-control" id="horarioApertura" name="horarioApertura" value="<?php echo set_value('precio');?>">
                                <?php echo form_error("horarioApertura","<span class='help-block'>","</span>");?>
                            </div>






                            <div class="form-group <?php echo !empty(form_error('precio')) ? 'has-error':'';?>">
                                <label for="Horario de Cierre">Horario Cierre:</label>
                                <input type="text" class="form-control" id="horarioCierre" name="horarioCierre" value="<?php echo set_value('precio');?>">
                                <?php echo form_error("horarioCierre","<span class='help-block'>","</span>");?>
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
