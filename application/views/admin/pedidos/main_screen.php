
       <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/POS/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Yantramanav" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/POS/css/font_awesome_all.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/POS/css/sweetalert2.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/select2/dist/css/select2.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/plugins/iCheck/minimal/color-scheme.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/POS/css/jquery-ui.css">
        <script src="<?php echo base_url()?>assets/POS/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url()?>assets/POS/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/POS/js/jquery.slimscroll.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/POS/js/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/POS/js/calculator.js"></script>
        
            
   
   
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Pedidos
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
   <div class="wrapper fix">
    <div class="top_header_part fix">
      <div class="header_part_top fix">
                   
               
                
                    <div class="header_single_button_holder" style="width:17%; ">
                        <a href="#" id="go_to_dashboard"><button style="float:right; background-color: #f2d618;"><i class="fas fa-caret-square-left"></i> 
                            Back
                            </button></a>
                    </div>
                    <div class="header_single_button_holder" style="width:15.8%">
                        <a href="<?php echo base_url(); ?>auth/logout"><button style="float:right;"><i class="fas fa-sign-out-alt"></i> Logout</button></a>
                    </div>

                </div>
      </div>          
           <div class="main_left fix">
               <div class="holder fix">
                   <div id="running_order_header">
                       <h3>ordene</h3>
                       <span id="refresh_order"><i class="fas fa-sync-alt"></i></span>   
                       <input type="text" name="search_running_orders" id="search_running_orders" style="height: 15px;    margin: 0px 0px 0px 5px;width: 90%;" placeholder="" /> 
                   </div>
                   
                   <div class="order_details fix" id="order_details_holder">
                      ordene lista
                   </div>
                   <div style="position: absolute;bottom: 5px;width:100%;" id="left_side_button_holder_absolute">
                       
                       <button class="operation_button fix" id="single_order_details"><i class="fas fa-info-circle"></i> orden lista</button>
                       <button class="operation_button fix" id="print_kot"><i class="fas fa-print"></i> iprime nota</button>
                       
                     
                     
                     
                       <button class="operation_button fix" id="kitchen_status_button"><i class="fas fa-spinner"></i> estado</button>	
                   </div>

               </div>
           </div>
        
               <div class="main_top fix">
                   <div class="button_holder fix">
                       <div class="single_button_middle_holder fix">
                          
                       </div>
                       <div style="text-align:center;" class="single_button_middle_holder fix">
                         
                       </div>
                       <div>

                        <form action="http://localhost/gestionPedidos/mantenimiento/pedidos/POS/updateReparatidor" METHOD="POST" >
                          Repartidores:
                        <select name="comRepartidor" id="rep" class="form-control" id="comRepartidor">
                                    <?php foreach($repartidores as $repa):?>
                                        <option value="<?php echo $repa->idUsuario?>"><?php echo $repa->nombres;?></option>
                                    <?php endforeach;?>
                        </select>
                       </div>

                      <!-- <?php echo $repa->idUsuario?>  -->
                    
                       <div class="single_button_middle_holder fix">
                        <button  style="float:right;margin-right:2px;"   type="button" > <i class="fas fa-truck"></i> <D></D>Delivery</button>

                       </div> 
                        </form>
                   </div>
                   <div class="waiter_customer">
                  
                       <div class="single_button_middle_holder">
                           <div style="width:92%;margin:0 auto;">
                      
                           </div>


                       </div>
                       <div class="single_button_middle_holder">
                          
                       </div>
                   </div>
                  
               </div>
               
                   <div class="main_center fix">
                      
                           <div class="order_holder fix">
                                       <table id="example1" class="table table-bordered table-hover" >
                                       <thead>
                                           <tr>
                                               <th>Producto </th>
                                               <th>Cantidad </th>
                                               <th>Precio Unitario Bs</th>
                                              <th>Total Bs</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                           <?php if(!empty($detalle)):?>
                                               <?php foreach($detalle as $de):?>
                                                   <tr>

                                                       <td><?php echo $de->nombre;?></td>
                                                       <td><?php echo $de->unidades;?></td>
                                                       <td><?php echo $de->precio ;?></td>
                                                       <td><?php echo ($de->unidades*$de->precio) ;?></td>
                                                   </tr>
                                               <?php endforeach;?>
                                           <?php endif;?>

                                            
                                       </tbody>
                                   </table>

                                   
                           </div>
                           <!-- <?php echo $de->idp;?> -->
                           <div>
                           <table cellspacing="0" cellpadding="0">
                           <tr style="background-color: #ffffff">
                               <th style="width:50%;text-align:left;padding-left:10px">&nbsp;</th>
                               <th style="width:10%;">&nbsp;</th>
                               <th style="width:15%;">&nbsp;</th>
                               <th style="width:10%;">&nbsp;</th>
                               <th style="width:15%;text-align:right;padding-right:10px;">&nbsp;</th>
                           </tr>
                           <tr style="background-color:#F5F5F5;">
                               <td style="padding-left:10px;font-weight:bold;text-align:left;">total item <span id="total_items_in_cart_with_quantity"><?php echo count($detalle) ?></span> <span id="total_items_in_cart" style="display: none;">0</span>
                               </td>
                               <td style="font-weight:bold;text-align:right;" colspan="3">Total a Pagar
                               </td>
                               <td style="font-weight:bold;text-align:right;padding-right:10px;"><?php echo $this->session->userdata('currency'); ?> <span  id="gTotal"><?php echo $total ?> Bs</span><span id="sub_total" style="display:none;">0.00</span>
                                   <span id="total_item_discount" style="display:none">0</span><span id="discounted_sub_total_amount" style="display:none;">0.00</span>
                               </td>  
                           </tr>
                           <tr style="background-color:#F5F5F5;">
                               <td style="padding-left:10px;font-weight:bold;text-align:left;">Cliente : <span id="total_items_in_cart_with_quantity"><?php echo $cliente ?></span> </td>
                               <td style="font-weight:bold;text-align:right;" colspan="3">descuento</td>
                               <td style="text-align:right;padding-right:10px;"><input type="text" name="" class="special_textbox" value="0" placeholder="Amt or %" id="sub_total_discount"/><span style="display:none" id="sub_total_discount_amount"></span></td>
                           </tr>
                           <tr style="background-color:#F5F5F5;">
                            
                           </tr>
                           <tr style="background-color:#F5F5F5;">
                            
                           </tr>
                           <tr style="background-color:#F5F5F5;">
                                 <td style="padding-left:10px;font-weight:bold;text-align:left;">Estado Actual del Pedido : <span id="total_items_in_cart_with_quantity">
                                 <?php  
                                    if  ($pedido[0]->estadoPedido==1) {
                                     echo "Solicitado";
                                    } 
                                    if  ($pedido[0]->estadoPedido==2) {
                                     echo "En Camino";
                                    } 

                                    if  ($pedido[0]->estadoPedido==3) {
                                     echo "Entregado";
                                    } 
                                    
                                 ?></span>
                                  </td>
                                 <td style="font-weight:bold;text-align:right;" colspan="3">repartidor</td>
                                 <td style="text-align:right;padding-right:10px;"><input type="" name="" value=<?php echo $repartidor ?> class="special_textbox" placeholder="Amt" id="delivery_charge"/></td>
                           </tr>
                           
                       </table>
                   <div class="main_bottom fix" style="padding-top:2px;">
                       <div class="button_group fix">
                           <div class="single_button_middle_holder cart_bottom_buttons" style="width:17%;">
                          <!-- <button style="float:left;padding:0px 3px;"  ><a href="<?php echo base_url();?>mantenimiento/pedidos/updateEstado?id<?php echo $idp;?>&repartidor=<?php echo $repartidor;?>&total=<?php echo $total;?>&cliente=<?php echo $cliente;?>&estado=2"></a> En Camino</button> -->
                          <button style="float:left;padding:0px 3px;" onclick="location.href='<?php echo base_url();?>mantenimiento/pedidos/updateEstado?id=<?php echo $idp;?>>&total=<?php echo $total;?>&cliente=<?php echo $cliente;?>&estado=2'" type="button">En Camino</button>
                           </div>
                           <div style="text-align:center;width:20%;" class="single_button_middle_holder cart_bottom_buttons">
                              
                           </div>
                           <div class="single_button_middle_holder cart_bottom_buttons" style="width:28%;">
                            
                           </div>
                           
                           <div class="single_button_middle_holder cart_bottom_buttons" style="width:34%;">
                               <button type="button" id="print_receipt" class="btn btn-success" data-id='<?php echo $de->idPedido;?>'  ><i class="fa fa-print"></i> Imprimir Ticket</button>
                              

                           </div>
                       </div>
                   </div>
                </div>
              </div>
           </div>   
              
    </section>
    <!-- /.content -->
</div>

<div class="modal"  role="dialog" id="pay_modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pagar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group row">
        <div class="col-md-4">
            <label for="" class="control-label">Monto a Pagar</label>
        </div>
        <div class="col-md-8 text-right" id="amount_to_pay">
        0.00
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4">
            <label for="" class="control-label">Importe Recibido</label>
        </div>
        <div class="col-md-8 text-right">
            <input type="text" class="form-control text-right number" step='any' id="a_rendered" placeholder="0.00">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-4">
            <label for="" class="control-label">Cambiar</label>
        </div>
        <div class="col-md-8 text-right" id="amount_change">
        0.00
        </div>
      </div>
    </div>
       
      <div class="modal-footer">
        <button type="button" onclick="pay_now()" class="btn btn-primary" id="pay_mdl_btn">Pagar</button>
      </div>
    </div>
  </div>
</div>
        
<style>
div#product_holder {
    height: 30vw;
    overflow: auto;
}
div#pg-holder {
    border-left: 1px solid white;
}
.card .price-field {
    position: absolute;
    background: #dc354585;
    border-radius: 5px;
    padding: 0px 5px;
    right: 2%;
    top: 1%;
    font-weight: 600;
    color: #000000fc;
}
 .card-data{
        float:left;
        cursor:pointer;
    }
    #list_holder{
        display:contents;
    }
.pg-btns {
    margin: 4px 4px;
    }
    div#gtotal_field {
    position: absolute;
    width: 90%;
    bottom: 12px;
}
div#order_field {
    height: 27vw;
    overflow: auto;
}
.loc_field{
    display:none;
}
#order_frm{
    width:100%
}
.card-data .card-body {
    padding: .3rem;
}
/* @media (min-height: 960px){
    div#order_field {
    height: 48rem;
    overflow: auto;
    }

    div#product_holder {
    height: 48rem;
    overflow: auto;
} */


}
@media (min-height: 760px){
    div#order_field {
    height: 30rem;
    overflow: auto;
    }

    div#product_holder {
    height: 30rem;
    overflow: auto;
}


}
    </style>        


<script>


    $(document).ready(function(){
        $('#print_receipt').click(function(){
           var nw = window.open("<?php echo base_url('mantenimiento/pedidos/receipt/') ?>"+$(this).attr('data-id'),"_blank","width=900,height=700")


     //    var nw = window.open("<?php echo base_url('mantenimiento/pedidos/receipt($id)')?>")
            if(nw.document.readyState === 'complete'){
                //  start_loader()
                    nw.print()
                    setTimeout(function(){
                    nw.close()
                        end_loader()
                    },750)
            }
          
        })
        $('#sidebarToggle').trigger('click')
        load_pg();
        load_cards();


        $('#order_frm').submit(function(e){
            e.preventDefault();
           //  if($('[name="save_as"]').val() == '')
           //  return false;

           // if($('#orders_tbl').find('.order-row').length <= 0 ){
           //     Dtoast('Lista de pedidos vacia ');
           //     return false;
           //}
        //    console.log('submitted')
        start_loader()
        $.ajax({
            url:'<?php echo base_url().'/sales/save_pos' ?>',
            method:'POST',
            data:$(this).serialize(),
            error:(err)=>{
                console.log(err)
                Dtoast('An error occured','error')
                 end_loader()
            $('#save_btn').html('Guardar')
            },
            success:(resp)=>{
                if(resp){
                    var data = JSON.parse(resp);
                    if(data.status == 'success'){
                        var renew = {type:'kitchen_renew',id:data.order_id}
                        websocket.send(JSON.stringify(renew));
                        Dtoast('Order successfully placed');
                         $('#pay_mdl_btn').removeAttr('disabled').html('Pay');
                        $('.modal').modal('hide');
                        if(data.ins_sale == 1){
                        $('#print_receipt').attr('data-id',data.order_id)
                        $('#print_receipt').show()
                        }else{
                        $('#print_receipt').hide()
                        }
                        $('#ref_field').html('<b>'+data.ref_no+'</b>')
                        $('#queue_field').html(data.queue)
                        $('#queue_modal').modal('show')
                        end_loader()
                    }
                }else{
                    Dtoast('An error occured','error')
                    $('#pay_mdl_btn').removeAttr('disabled').html('Pay');
                    end_loader()
                }
            }
        })
            
        })

    $('#otype').change(function(){
        if($(this).val() == 3)
        $('.loc_field').show();
        else
        $('.loc_field').hide();
    })
    
    $('#a_rendered').on('keyup keypress',function(e){
        if(e.which == 13){
            pay_now();
            return false;
        }
        var rendered = $(this).val();
            rendered = rendered.replace(/,/g,'')
        var amount = $('#amount_to_pay').html().replace(/,/g,'');
        amount = parseFloat(amount);
        var change = parseFloat(rendered) - amount;
        if(!isNaN(change)){
            $('#amount_change').html(parseFloat(change).toLocaleString('en-US',{style:'decimal','maximumFractionDigits' : 2,'minimumFractionDigits' : 2}))
        }else{
            $('#amount_change').html('0.00') 
        }
    })

    })


            $('#go_to_dashboard').on('click',function(){
               
                  $idRes=1;
                    //$idre=$this->session->userdata("idRestaurante");
                   // window.location.href = '<?php echo base_url(); ?>mantenimiento/pedidos?re='.$idRes;  
                    window.location.href = "<?php echo base_url('mantenimiento/pedidos?re=idRes');?>"   
          
            });


    window.pay_now = function(){
        $('[name="amount_tendered"').val(0)
        if($('#a_rendered').val() <= 0){
            Dtoast('Please enter amount rendered');
            return false;
        }
        // console.log($('#amount_change').html() <= -1)
        var change = $('#amount_change').html().replace(/,/g,'')
        change = parseFloat(change)
        if(change <= -1){
            Dtoast('Amount to pay is greater than rendered.','error');
            return false;
        }
        var tendered = $('#a_rendered').val()
        if(tendered <= 0)
        tendered = 0;
        $('[name="amount_tendered"').val(tendered)
        $('#order_frm').submit()
    }
    window.submit_frm =function(type){
       /* if($('#orders_tbl').find('.order-row').length <= 0 ){
               Dtoast('Lista de pedidos vacia','error');
               return false;
           }*/
        $('[name="save_as"]').val(type);
        // $('#order_frm').submit()
        if(type == 2){
            $('#amount_to_pay').html($('#gTotal').html())
            $('#amount_change').html('0.00')
            $('#a_rendered').val('')
            $('#pay_modal').modal('show')
            setTimeout(function(){
                $('#a_rendered').focus();
            },750)
        }else{
            $('.submit_btns').attr('disabled',true);
            $('#save_btn').html('Please wait ...')
            $('#order_frm').submit()
        }
    }

    window.load_cards = function($id = 'all',status='1'){
        $('#list_holder').html('<div class="text-center text-white w-100"><i>Please wait...</i></div>')
        $.ajax({
            url:'<?php echo base_url().'products/get_products' ?>',
            method:'POST',
            data:{id:$id,status:status},
            error:(err)=>{
                console.log(err)
            },
            success:function(resp){
                if(resp){
                    $('#list_holder').html('')
          var data = JSON.parse(resp);
          // console.log(data)
                    if(data.length <= 0 ){
                    $('#list_holder').html('<div class="text-center text-white w-100"><i>No Data...</i></div>')
                    }
          data.map(row=>{
            html = $('#card_holder_clone .card-data').clone();
            html.find('.card-title').html(row.name);
            html.find('.price-field').html('&#36; '+(parseFloat(row.price).toLocaleString('en-US',{style:'decimal','maximumFractionDigits' : 2})));
                        if(row.status == 1)
                        html.find('.avail-status').html('<span class="badge badge-success">Disponible</span>');
                        else
                        html.find('.avail-status').html('<span class="badge badge-danger">No disponible</span>');

            html.find('.card-title').html(row.name);
                        html.attr({'data-name':row.name,'data-id':row.id,'data-price':(parseFloat(row.price).toLocaleString('en-US',{style:'decimal','maximumFractionDigits' : 2}))});
            // html.find('.card-text').html(row.description);
            if(row.img_path == '')
              row.img_path = 'uploads/products/logo.png'
            html.find('.card-img-top').attr('src','<?php echo base_url() ?>'+row.img_path)
            $('#list_holder').append(html)
                        
          })
                    card_data();
                   
                }

                
                
            }
            
        })
    }
    window.card_data = function(){
        $('.card-data').each(function(){
            $(this).click(function(){
                // console.log($('#orders_tbl').find('.order-row[id="'+$(this).attr('data-id')+'"]').length )
                if($('#orders_tbl').find('.order-row[id="'+$(this).attr('data-id')+'"]').length > 0){
                Dtoast("Product is already on the list");
                return false;
                }
                html = '';
                html += '<tr class="order-row" id="'+$(this).attr('data-id')+'">';
                html += '<td><center><a href="javascript:void(0)" onclick="rem_prod('+$(this).attr('data-id')+')"><i class="fa fa-times" style="color:red"></i></a></center></td>'
                html += '<td>'+$(this).attr('data-name')+'<input type="hidden" name="pid[]" value="'+$(this).attr('data-id')+'"></td>'
                html += '<td><input class="qty text-right" type="number" name="qty[]" value="1" style="width:50px" required></td>'
                html += '<td class="text-right"><input class="price" type="hidden" name="price[]" value="'+$(this).attr('data-price')+'" required>'+$(this).attr('data-price')+'</td>'
                html += '<td class="text-right"><input class="t_price" type="hidden" name="tprice[]" value="'+$(this).attr('data-price')+'" required><p  class="t_price">'+$(this).attr('data-price')+'</p></td>'
                html += '</tr>';
                $('#orders_tbl tbody').prepend(html)
                // console.log(html)
                compute_totals();
                $('.qty').on('click',function(){
                    $(this).select()
                })
            })
            

        })
    }
    window.rem_prod = function(pid){
        $('.order-row[id="'+pid+'"]').remove()
        compute_totals();
    }
    window.compute_totals = function(){
        $('.order-row').each(function(){
            var _this = $(this)
            $(this).find('.qty').on('change keyup',function(){
                var qty = $(this).val();
                var price = _this.find('.price').val()
                
                price = price.replace(/,/g,'')
                price = parseFloat(price);
                var total_price = parseFloat(qty * price).toLocaleString('en-US',{style:'decimal','maximumFractionDigits' : 2})
                // console.log(price,qty)
                _this.find('input.t_price').val(total_price)
                _this.find('p.t_price').html(total_price)
                compute_totals()
            })
        })

        var _total = 0;
        $('.order-row').find('p.t_price').each(function(){
            var p = $(this).html()
            p = p.replace(/,/g,'')
            p = parseFloat(p)
            _total += p;
        })
       _total = parseFloat(_total).toLocaleString('en-US',{style:'decimal','maximumFractionDigits' : 2,'minimumFractionDigits' : 2})
        $('#gTotal').html(_total)
        $('[name="gTotal"]').val(_total)

    }

    window.load_pg = function(status= 1){
        $.ajax({
            url:'<?php echo base_url().'products/load_pg' ?>',
            type:'POST',
            data:{status: status},
            error:(err)=>{
                console.log(err)
            },
            success:(resp)=>{
                if(resp){
                    var data = JSON.parse(resp)
                    $('#pg-field').html('<button class="btn btn-info pg-btns pull-left" data-id="all">All</button>')
                    if(typeof data != undefined && Object.keys(data).length > 0){
                        data.map(row=>{
                            $('#pg-field').append('<button type="button" class="btn btn-primary pg-btns pull-left" data-id="'+row.id+'">'+row.name+'</button>')

                        })


                    }
                    $('.pg-btns').each(function(){
                        $(this).click(function(){
                            $('.pg-btns.btn-info').removeClass('btn-info').addClass('btn-primary');
                            $(this).removeClass('btn-primary').addClass('btn-info')
                            load_cards($(this).attr('data-id'))
                        })
                    })
                }
            }
        })
    }
</script>

        <!-- The Modal -->
    

     
        <!-- end of item modal -->

        <!--add customer modal -->
        <!-- The Modal -->
      
        <!-- end add customer modal -->

         <!--add customer modal -->
        <!-- The Modal -->
        <!-- <div id="show_tables_modal" class="modal">

            <div class="modal-content" id="modal_content_show_tables">
                <h1>Tables</h1>
                
                <div class="select_table_modal_info_holder fix">
                        
                                            
                </div>
                
                <div class="section7 fix">
                    <div class="sec7_inside" id="sec7_1"><button id="close_select_table_modal">Cancel</button></div>
                    <div class="sec7_inside" id="sec7_2"><button id="selected_table_done">Done</button></div>
                </div>
            </div>

        </div> -->
        <!-- end add customer modal -->

        <!-- The Modal -->
     
        <!-- end add customer modal -->

        <!-- The sale hold modal -->
     
        <!-- end sale hold modal -->

        <!-- The sale hold modal -->
      
  
        <!-- end of notification list modal -->

        
    
        <!-- end of notification list modal -->


      
        <!-- end of KOT modal -->
        
    