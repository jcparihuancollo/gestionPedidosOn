<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurantes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Restaurantes_model");
	}

	public function index()
	{
		$data  = array(
			'restaurantes' => $this->Restaurantes_model->getRestaurantes(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/restaurante/list",$data);
		$this->load->view("layouts/footer");

	}
	public function add(){

		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/restaurante/add");
		$this->load->view("layouts/footer");
	}
	public function store(){

		$nombre = $this->input->post("nombre");
		$telefono = $this->input->post("telefono");
		$celular = $this->input->post("celular");
		$direccion = $this->input->post("direccion");
		$horarioApertura = $this->input->post("horarioApertura");
		$horarioCierre = $this->input->post("horarioCierre");
		$fotoRestaurante = $this->input->post("fotoRestaurante");

		//$this->form_validation->set_rules("codigo","Codigo","required|is_unique[productos.codigo]");
		$this->form_validation->set_rules("celular","Celular","required");
		$this->form_validation->set_rules("direccion","Direccion","required");
		$this->form_validation->set_rules("horarioApertura","Horario Apertura","required");


		if ($this->form_validation->run()) {
			$data  = array(
			'nombre' => $nombre, 
			'telefono' => $telefono,
			'celular' => $celular,
			'direccion' => $direccion,
			'horarioApertura' => $horarioApertura,
			'horarioCierre' => $horarioCierre,
			'fotoRestaurante'=> $fotoRestaurante,
			'estado' => "1"
		);

		if ($this->Restaurantes_model->save($data)) {
			redirect(base_url()."mantenimiento/restaurantes");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."mantenimiento/restaurantes/add");
		
		}
	}
		else{
			$this->add();
		}
	}


	public function edit($id){
		$data  = array(
			'restaurante' => $this->Restaurantes_model->getRestaurante($id), 
			//"tipoclientes" => $this->Restaurante_model->getTipoClientes(),
			//"tipodocumentos" => $this->Restaurante_model->getTipoDocumentos()
		);

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/restaurante/edit",$data);
		$this->load->view("layouts/footer");
	}



	public function update(){

		$idRestaurante = $this->input->post("idRestaurante");
		$nombre = $this->input->post("nombre");
		$telefono = $this->input->post("telefono");
		$celular = $this->input->post("celular");
		$direccion=$this->input->post("direccion");
		$horarioApertura = $this->input->post("horarioApertura");
		$horarioCierre = $this->input->post("horarioCierre");
		$fotoRestaurante = $this->input->post("fotoRestaurante");
		
		$restauranteActual = $this->Restaurantes_model->getRestaurante($idRestaurante);

		/*if ($codigo == $restauranteActual->codigo) {
			$is_unique = '';
		}
		else{
			$is_unique = '|is_unique[productos.codigo]';
		}*/

		//$this->form_validation->set_rules("nombre","Nombre","required".$is_unique);
		$this->form_validation->set_rules("nombre","Nombre","required");
		$this->form_validation->set_rules("telefono","Telefono","required");
		$this->form_validation->set_rules("direccion","Direccion","required");
		$this->form_validation->set_rules("horarioApertura","HorarioApertura","required");


		if ($this->form_validation->run()) {
			$data  = array(
			
			'nombre' => $nombre, 
			'telefono' => $telefono,
			'celular' => $celular,
			'direccion' => $direccion,
			'horarioApertura' => $horarioApertura,
			'horarioCierre' => $horarioCierre,
			'fotoRestaurante'=> $fotoRestaurante,

			);
			
			if ($this->Restaurantes_model->update($idRestaurante,$data)) {
				redirect(base_url()."mantenimiento/restaurantes");
			}

			else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."mantenimiento/restaurantes/edit/".$idRestaurante);
			}
		}	
		else
		{
			$this->edit($idproducto);
		}
		

	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Restaurantes_model->update($id,$data);
		echo "mantenimiento/restaurantes";
	}
}