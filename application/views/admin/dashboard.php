
        <!-- =============================================== -->

          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Administrador
                
                <small></small>
                </h1>
            </section>
            <!-- Main content -->



            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    Esta vista es del Administrador para gestion de Usuarios
                </br>
                <h1>usuario</h1>
                    <?php echo $this->session->userdata("nombres")?>

                    <h1>pertenece al restaurate</h1>
                    <?php echo $this->session->userdata("idRestaurante")?>


                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
