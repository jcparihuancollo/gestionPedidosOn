     
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Productos de:   
        <small>Listado:...:  </small>

        </h1>
              
        <h1>

     

        </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/productos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Productosssss</a>
                        <?php  ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>Nombre </th>
                                    <th>Precio </th>
                                    <th>descripcion</th>
                                    <th>foto Producto</th>
                                    <th>Categoría</th>
                              
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($productos)):?>
                                    <?php foreach($productos as $producto):?>
                                        <tr>

                                            <td><?php echo $producto->nombre;?></td>
                                            <td><?php echo $producto->precio;?></td>
                                            <td><?php echo $producto->descripcion;?></td>
                                            <td><?php echo $producto->fotoProducto;?></td>
                                            <td><?php echo $producto->categoria;?></td>
                                            
                                            <?php $dataproducto = $producto->nombre."*".$producto->precio."*".$producto->descripcion."*".$producto->categoria;?>        

                                            <td>
                                                <div class="btn-group">
                                                    
                                                    <button type="button" class="btn btn-info btn-view-producto" data-toggle="modal" data-target="#modal-default" value="<?php echo $dataproducto;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    
                                                    <a href="<?php echo base_url()?>mantenimiento/productos/edit/<?php echo $producto->idProducto;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/productos/delete/<?php echo $producto->idProducto;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                </div>
                                            
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>


                            </tbody>
                        </table>

                       <p>id Usuario:</p> 

                       <?php echo $this->session->userdata("idUsuario")?>

                        <p>id Restaurante:</p>
                        <?php echo $this->session->userdata("idRestaurante")?>
                        

                         <p>NOMBRE DEL RESTAURANTE : <?php echo $producto->nombreRes;?></p>

                      

              

                          

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
        <h4 class="modal-title">Informacion del Producto</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
