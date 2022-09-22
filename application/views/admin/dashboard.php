
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
                        <h1>Usuario: <?php echo $this->session->userdata("nombres")?></h1>
                        <h1>Restaurante: <?php echo $this->session->userdata("nombreRestaurante")?></h1>
                        <h1>id Restaurante: <?php echo $this->session->userdata("idRestaurante")?></h1>
                        <h1>Id Usuario: <?php echo $this->session->userdata("idUsuario")?></h1>
                        <h1>Id Rol: <?php echo $this->session->userdata("idRol")?></h1>
                        <h1>Rol: <?php echo $this->session->userdata("rol")?></h1>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
