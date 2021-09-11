<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}

	
	public function index()
	{
		$data  = array(
			'roles' => $this->Usuarios_model->getRoles(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/roles/list",$data);
		$this->load->view("layouts/footer");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/roles/add");
		$this->load->view("layouts/footer");
	}

	public function store(){

		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$this->form_validation->set_rules("nombre","Nombre","required|is_unique[categorias.nombre]");

		if ($this->form_validation->run()==TRUE) {

			$data  = array(
				'nombre' => $nombre, 
				'descripcion' => $descripcion,
				'estado' => "1"
			);

			if ($this->Categorias_model->save($data)) {
				redirect(base_url()."mantenimiento/roles");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/roles/add");
			}
		}
		else{
			/*redirect(base_url()."mantenimiento/categorias/add");*/
			$this->add();
		}

		
	}

	public function edit($id){
		$data  = array(
			'rol' => $this->Roles_model->getRol($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/roles/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idRol = $this->input->post("idRol");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");

		$rolactual = $this->Roles_model->getRol($idRol);

		if ($nombre == $categoriaactual->nombre) {
			$is_unique = "";
		}else{
			$is_unique = "|is_unique[categorias.nombre]";

		}


		$this->form_validation->set_rules("nombre","Nombre","required".$is_unique);
		if ($this->form_validation->run()==TRUE) {
			$data = array(
				'nombre' => $nombre, 
				'descripcion' => $descripcion,
			);

			if ($this->Categorias_model->update($idCategoria,$data)) {
				redirect(base_url()."mantenimiento/roles");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."mantenimiento/roles/edit/".$idRol);
			}
		}else{
			$this->edit($idRol);
		}

		
	}

	public function view($id){
		$data  = array(
			'rol' => $this->Roles_model->getRol($id), 
		);
		$this->load->view("admin/roles/view",$data);
	}

	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Roles_model->update($id,$data);
		echo "mantenimiento/roles";
	}

	public function deletefisico($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Roles_model->delete($id);
		echo "mantenimiento/roles";
	}

}
