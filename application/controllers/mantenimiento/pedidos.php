<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("Pedidos_model");

		$this->load->model("Productos_model");
		$this->load->model("Categorias_model");
		$this->load->model("Restaurantes_model");
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		
		$idRestaurante=$this->input->get('pe');

         //echo "el id es  ".$idRestaurante;
		$data  = array(
			'pedidos' => $this->Pedidos_model->getPedidos($idRestaurante), 

			
		);
				

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");

		$this->load->view("admin/pedidos/list",$data);

			 
		$this->load->view("layouts/footer");


	}
	

}