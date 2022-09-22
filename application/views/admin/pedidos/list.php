     
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Pedidos de:   
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
              
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    
                                    <th>idPedido </th>
                                    <th>descripcion </th>
                                    <th>estadoPedido</th>
                                    <th>idResta</th>
                                    <th>NomRestaurante</th>
                                    <th>idcliente</th>
                                    <th>NomCliente</th>
                                    <th>idUsuario</th>
                                    <th>nomOperarioLocal</th>
                                    <th>idRol</th>
                                    
                              
                              
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($pedidos)):?>
                                    <?php foreach($pedidos as $pedido):?>
                                        <tr>

                                            <td><?php echo $pedido->idPedido;?></td>
                                            <td><?php echo $pedido->descripcion;?></td>
                                            <td><?php echo $pedido->estadoPedido;?></td>
                                            <td><?php echo $pedido->idRestaurante;?></td>
                                            <td><?php echo $pedido->NomREstaurante;?></td>
                                            <td><?php echo $pedido->idCliente;?></td>
                                            <td><?php echo $pedido->nombredelcliente;?></td>
                                            <td><?php echo $pedido->idUsuario;?></td>
                                            <td><?php echo $pedido->NomdelOperarioLocal;?></td>
                                            <td><?php echo $pedido->idRol;?></td>
                                            
                                            

                                            <td>
                                                <div class="btn-group">
                                                     <a href="<?php echo base_url();?>" class="btn btn-warning"><span class=""></span>VER DETALLE      </a>
                                                  
                                                    
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
