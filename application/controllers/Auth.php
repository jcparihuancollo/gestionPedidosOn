<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}
	public function index()
	{
		if ($this->session->userdata("login"))  {
			
			redirect(base_url()."dashboard");
			
			
		}
		else{
			
			$this->load->view("admin/login");
		}
		

	}

	public function login(){
		$nombreUsuario = $this->input->post("nombreUsuario");
		$contrasena = $this->input->post("contrasena");

		//pruebas
		//$rol=$this->input->post("idRol");	
		//******
		$res = $this->Usuarios_model->login($nombreUsuario, md5($contrasena));

	//	$id1=$res->rol_id;	
	//	$rol=$this->input->post("idRol");	
	//	$resRol=$this->Usuarios_model->rol($rol);
		//$data=array('nombre'=>$nombre);
		//$resRol

		if (!$res)  {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url());
		}

		else{

				$idRes=$res->idRestaurante;

				$idRol=$res->idRol;
				
				$resNom = $this->Usuarios_model->getRestauranteNombre($idRes);
				$resRol = $this->Usuarios_model->getRolNombre($idRol);


			if($res->idRol ==5){ 
				$data  = array(
					'idUsuario' => $res->idUsuario, 
					'apellido' => $res->apellidoPaterno,
					'idRol' => $res->idRol,
					'email' => $res->email,
					'nombres' => $res->nombres,
					'idRestaurante'=>$res->idRestaurante,
					'nombreRestaurante'=>$resNom->nombre,
					'rol'=>$resRol->nombre,


					'login' => true
				);
						
				$this->session->set_userdata($data);
				redirect(base_url()."dashboard");
			
			}
			else{
			if($res->idRol ==6){ 
				$data  = array(
					'idUsuario' => $res->idUsuario, 
					'apellido' => $res->apellidoPaterno,
					'idRol' => $res->idRol,
					'email' => $res->email,
					'nombres' => $res->nombres,
					'idRestaurante'=>$res->idRestaurante,
					'nombreRestaurante'=>$resNom->nombre,
					'rol'=>$resRol->nombre,

					'login' => true
				);
						
				$this->session->set_userdata($data);
				redirect(base_url()."dashboard");
			
			}

				/*	if($res->rol_id == 6){
							$data  = array(
						'id' => $res->id, 
						'nombre' => $res->nombres,
						'rol' => $res->rol_id,
						'es' => $res->email,
						'login' => true
					);
					//echo("rol id 2");
					$this->session->set_userdata($data);
						redirect(base_url()."Dashboard");


					}*/
					
					else{
						if($res->idRol ==7){
					$data  = array(
					'idUsuario' => $res->idUsuario, 
					'apellido' => $res->apellidoPaterno,
					'idRol' => $res->idRol,
					'email' => $res->email,
					'nombres' => $res->nombres,
					'idRestaurante'=>$res->idRestaurante,
					'nombreRestaurante'=>$resNom->nombre,
					'rol'=>$resRol->nombre,

					'login' => true
				);
						
				$this->session->set_userdata($data);
				redirect(base_url()."dashboard");
					}
				
				}

			}

		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
