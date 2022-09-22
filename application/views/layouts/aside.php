        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">      
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">PRINCIPAL NAVEGACION</li>
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i> <span>Inicio</span>
                        </a>
                    </li>
                   
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-cogs"></i> <span>Gestionar</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                         <?php $restaurante=$this->session->userdata("idRestaurante") ?>

                       

                         <?php
                         $rol= $this->session->userdata("idRol");

                          if($rol==5) { ?>   

                         <ul class="treeview-menu">
                             
                            <li><a href="<?php echo base_url();?>mantenimiento/restaurantes"><i class="fa fa-circle-o"></i> Restaurantes</a></li>
                          

                            <li><a href="<?php echo base_url(); ?>mantenimiento/usuarios"><i class="fa fa-circle-o"></i> usuarios</a></li>
                          </ul>
                   
                      <?php }

                      else { 

                            if($rol==6){   ?>


                            <ul class="treeview-menu">
                            
                            <li><a href="<?php echo base_url();?>mantenimiento/categorias"><i class="fa fa-circle-o"></i> Categoria de Productos</a></li>
                          
                            <li><a href="<?php echo base_url('mantenimiento/productos?pro='.$restaurante);?>"><i class="fa fa-circle-o"></i> Productos</a></li>

                            <li><a href="<?php echo base_url(); ?>mantenimiento/usuarios"><i class="fa fa-circle-o"></i> usuarios</a></li>
                          </ul>


                          <?php  }

                          else {  

                            if($rol==7){
                           ?>

                           <ul class="treeview-menu">

                            <li><a href="<?php echo base_url();?>mantenimiento/categorias"><i class="fa fa-circle-o"></i> Categoria de Puctos</a></li>
                            
                            <li><a href="<?php echo base_url('mantenimiento/productos?pro='.$restaurante);?>"><i class="fa fa-circle-o"></i> Productos</a></li> 
                        </ul>

                    <?php }  

                }
            }
                    ?>     

                             
                       

                    </li>
                    


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share-alt"></i> <span>Movimientos <?php echo $this->session->userdata("idRol")?></span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Generar Boleta</a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Generar Factura</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-print"></i> <span>Reportes</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> </a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> </a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> </a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> </a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> </a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user-circle-o"></i> <span>Administrador</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url();?>mantenimiento/roles"><i class="fa fa-circle-o"></i> </a></li>
                             <li><a href="<?php echo base_url(); ?>mantenimiento/usuarios"><i class="fa fa-circle-o"></i> </a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> </a></li>
                            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> </a></li>
                        </ul>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->