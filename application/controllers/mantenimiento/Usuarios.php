<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->model("Roles_model");
		$this->load->model("Restaurantes_model");

	}

	public function index()
	{
		$data  = array(
			'usuarios' => $this->Usuarios_model->getUsuarios(), 
		);


		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/list",$data);
		$this->load->view("layouts/footer");

	}
	public function add(){
		$data=array( 
			"roles" => $this->Roles_model->getRoles(),
			"restaurantes" =>$this->Restaurantes_model->getRestaurantes()
		);
		
	//	$data3['data']=$data;
	//	$data3['data1']=$data1;
 		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/add",$data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidoPaterno");
		$telefono = $this->input->post("celular");
		$email = $this->input->post("email");
		$username = $this->input->post("nombreUsuario");
		$password = $this->input->post("contrasena");
		$roles = $this->input->post("roles");
		$restaurante = $this->input->post("");

		
		$this->form_validation->set_rules("nombreUsuario","nombreUsuario","required|is_unique[usuarios.roles]");
		$this->form_validation->set_rules("contrasena","contrasena","required");
		
		if ($this->form_validation->run()) {
			$data  = array(
				
				'nombres' => $nombres,
				'celular' => $celular,
				'email' => $email,
				'nombreUsuario' => $nombreUsuario,
				'contrasena' => $contrasena,
				'rol_id' => $rol,
				'estado' => "1"
			);

			if ($this->Usuarios_model->save($data)) {
				redirect(base_url()."mantenimiento/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/usuarios/add");
			}
		}
		else{
			$this->add();
		}

		
	}

	public function edit($id){
		$data =array( 
			"usuario" => $this->Usuarios_model->getUsuario($id),
			"rol" => $this->Roles_model->getRol($id),
			"restaurante" => $this->Restaurantes_model->getRestaurante($id)
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/usuarios/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idusuarios = $this->input->post("idusuario");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidoPaterno");
		$telefono = $this->input->post("celular");
		$email = $this->input->post("email");
		$username = $this->input->post("nombreUsuario");
		$password = $this->input->post("contrasena");

		$rol = $this->input->post("rol");

		$usuariosActual = $this->Usuarios_model->getUsuarios($idusuarios);

		if ($rol == $usuariosActual->codigo) {
			$is_unique = '';
		}
		else{
			$is_unique = '|is_unique[usernames.rol]';
		}

		$this->form_validation->set_rules("rol","rol","required".$is_unique);
		$this->form_validation->set_rules("nombreUsuario","nombreUsuario","required");
		$this->form_validation->set_rules("contrasena","contrasena","required");
		


		if ($this->form_validation->run()) {
			$data  = array(
				'nombres' => $nombres, 
				'apellidos' => $apellidos,
				'telefono' => $telefono,
				'email' => $email,
				'username' => $username,
				'password' => $password,
				'rol_id' => $rol,
			);
			if ($this->Usuarios_model->update($idUsuario,$data)) {
				redirect(base_url()."mantenimiento/usuarios");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/productos/edit/".$idUsuario);
			}
		}else{
			$this->edit($idusuarios);
		}

		
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Usuarios_model->update($id,$data);
		echo "mantenimiento/usuarios"; 
	}

	public function listataxispdf(){
		
		$this->load->library('pdf');
		$lista=$this->Productos_model->getProductos();
		$lista=$lista->result();
		$this->pdf = new Pdf();
		$this->pdf->AddPage();
		$this->pdf->SetTitle("listaciudades");
		$this->pdf->SetLeftMargin(15);
		$this->pdf->SetRightMargin(15);
		$this->pdf->SetFillColor(210,210,210);
		$this->pdf->SetFont('Arial','B',11);
		$this->pdf->Cell(30);
		$this->pdf->Cell(120,10,'lista de conductores',0,0,'c');
		$this->pdf->Ln(10);
		foreach ($lista as $row) {

			$conductor=$row->$nombre;
			$this->pdf->Cell(62,5,$conductor,'TBLR',0,'L',0);
			$this->pdf->Ln(5);
		}

		$this->pdf->Output("listataxispdf",'I');
	}

}