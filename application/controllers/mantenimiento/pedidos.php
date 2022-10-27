<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("Pedidos_model");
        $this->load->model("Pedidos_detalle_model");
		$this->load->model("Productos_model");
		$this->load->model("Categorias_model");
		$this->load->model("Restaurantes_model");
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		
		$idRestaurante=$this->input->get('re');
    $idPedi=$this->input->get('idd');

         //echo "el id es  ".$idRestaurante;
		$data  = array(
			'pedidos' => $this->Pedidos_model->getPedidos($idRestaurante), 
      'repartidores' => $this->Pedidos_model->getUsuariosRepartidores(), 

			
		);
			

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");

		$this->load->view("admin/pedidos/list",$data);

			 
		$this->load->view("layouts/footer");

        


	}

	   public function POS() {


         $id = $_GET['idd'];
         $idOperario=$_GET['idOperario'];
         $noOpe=$_GET['NO'];
      //   $idPedi=$_GET['pedido'];
   //      $estadoPedido=$_GET['estPed'];

        // echo $estadoPedido;
         echo "<br>";
         echo ("idOperario"),$idOperario;
             echo "<br>";
         echo ("idPedido"),$id;

         
       
          if($idOperario=='' || $idOperario==$this->session->userdata('idUsuario')){


                       $idRestaurante=$this->input->get('re');
    
                     $idOperario=$this->session->userdata('idUsuario');
                  
                     $this->Pedidos_model->actualizarOperario($idOperario,$id);
                     $repartidor='rep1';
           

                    // $data1  = $this->Pedidos_detalle_model->getEstadoPedido($id); 
                    //  $estPedido= $data1['estadoPedido'];
                    //  echo ('<br>');
                    //   echo $estPedido;

                    //  print_r($da);

                     $data  = array(
            			         'detalle' => $this->Pedidos_detalle_model->getDetalle($id),
                         'repartidor' =>$repartidor ,
                           'total' =>$_GET['total'],
                           'cliente' =>$_GET['cliente'],
                           'idp' =>  $id ,
                      //  'estPedido'=>"1",
                      //  'estadoPedido'=>$_GET['estadoPedido'],

                           'pedido' => $this->Pedidos_model->getPedido($id), 


                        'repartidores' => $this->Pedidos_model->getUsuariosRepartidores(), 
                             
            	           	);

                    //$this->load->view("layouts/load");
            	    //	$this->load->view("layouts/aside");
                     
                    $this->load->view("admin/pedidos/main_screen",$data);
                    $this->load->view("layouts/footer2");
                    //$this->load->view("admin/pedidos/main_screen");

                }        
                else{
                 // echo ('Atiende el operario'),$noOpe;
               //   redirect(base_url()."mantenimiento/pedidos/");
              //echo "<script>
            // alert('Los datos se guardaron con exito');
            // window.location= 'admin/pedidos/list'
            // </script>";
      
           echo "<script>alert('ya esta siendo atendido por :');</script>",$noOpe;
            //     }

                }
    
    

   }

    public function obtenerRepartidor(){
    
        $idRestaurante=$this->input->get('re');
        $data  = array(
            'repartidores' => $this->Pedidos_model->getUsuariosRepartidores($idRestaurante), 

      
    );
        
        $this->load->view("admin/pedidos/main_screen",$data);
    }
   
    public function updateEstado() {
        $id = $_GET['id'];
        $this->Pedidos_model->actualizarEstado($_GET['estado'],$id);
        $data  = array(
           'detalle' => $this->Pedidos_detalle_model->getDetalle($id),
           'repartidor' =>$_GET['repartidor'] ,
           'total' =>$_GET['total'],
           'cliente' =>$_GET['cliente'],
           'idp' =>  $id ,
           'pedido' => $this->Pedidos_model->getPedido($id), 
       );
       
       
       $this->load->view("layouts/load");
       $this->load->view("layouts/aside");
       $this->load->view("admin/pedidos/main_screen",$data);
       $this->load->view("layouts/footer2");
   }
	
      function receipt($id= ''){

        $data['id'] = $id;

        $data1  = $this->Pedidos_detalle_model->getEstadoPedido($id); 
        $estPedido= $data1['estadoPedido'];

                       echo ('<br>');
                       echo ('estado del Pedido :  ');
                      // echo $estPedido;

            if($estPedido==1){
              $estPedido=2;
              $this->Pedidos_model->actualizarEstado($estPedido,$id);          
            }
     
               
        $this->load->view('admin/pedidos/receipt',$data);
       // redirect('admin/pedidos/receipt', 'refresh');

    }

    function updateReparatidor(){

       //   $id = $_GET['idd'];
            $idRep=$_POST['comRepartidor'];
        //    $nombreRepartidor=$_POST['nombres'];
          //$idRep=$_GET['repa'];
         // echo $idRep;
    //  $idRepartidor=$_GET['idRepar'];
     // echo $idRepartidor;
      

        $this->Pedidos_model->actualizarRepartidor($idRep,$id);
      

       echo $idRep;
          header('refresh:0');
       //   $data  = array(
       //       'detalle' => $this->Pedidos_detalle_model->getDetalle($id),
       //       'repartidor' =>$_GET['idRepar'] ,
       //       'total' =>$_GET['total'],
       //       'cliente' =>$_GET['cliente'],
       //       'idp' =>  $id ,
       //       'pedido' => $this->Pedidos_model->getPedido($id), 
       //  );
       
       // // $this->load->view("layouts/load");
       // // $this->load->view("layouts/aside");
       //  $this->load->view("admin/pedidos/main_screen",$data);
       //  $this->load->view("layouts/footer2");

       //echo "<script>alert('" . $data->__GET('acronimo') . " ya existe en la Tabla Categoria');</script>";
    }

}