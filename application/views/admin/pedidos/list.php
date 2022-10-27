     
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
                                    <th>Atendido por:</th>
                                    <th>Entregado por:</th>
                                    <th>Total en Bs.</th>
                              
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($pedidos)):?>
                                    <?php foreach($pedidos as $pedido):?>
                                        <tr>

                                            <td><?php echo $pedido->idPedido;?></td>
                                            <td><?php echo $pedido->descripcion;?></td>
                                            <td><?php 
                                              if  ($pedido->estadoPedido==1) {
                                               // echo "Solicitado";?>
                                                <span class=" btn-danger">Solicitado</span>
                                              <?php } 

                                               if  ($pedido->estadoPedido==2) { ?>
                                                <span class=" btn-warning">En Camino</span>
                                                
                                              <?php } 
        
                                               if  ($pedido->estadoPedido==3) {?>
                                                <span class="bagde btn-info">Entregado</span>

                                           <?php    } ?>
                                            </td>

                                            <td><?php echo $pedido->NomdelOperarioLocal;?></td>
                                            <!-- <?php foreach ($repartidores as $re)?>   -->
                                            <td><?php echo $pedido->rePor;?></td>
                                            <!-- <td><?php echo $pedido->nombredelcliente;?></td> -->
                                            <td><?php echo $pedido->totalBs;?></td>

                                            
                                            

                                            <td>
                                                <div class="btn-group">

                                                          
                                                     <a href="<?php echo base_url();?>mantenimiento/pedidos/POS?idd=<?php echo $pedido->idPedido;?>&NO=<?php echo $pedido->NomdelOperarioLocal;?>&estPed=<?php echo $pedido->estadoPedido;?>&total=<?php echo $pedido->totalBs;?>
                                                     &cliente=<?php echo $pedido->nombredelcliente;?>&idOperario=<?php echo $pedido->idOperario;?>" class="btn btn-warning"><span class=""></span>VER DETALLE      </a>
                                                  
                                                    
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
