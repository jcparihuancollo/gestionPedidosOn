<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function login($nombreUsuario, $contrasena){
		$this->db->where("nombreUsuario", $nombreUsuario);
		$this->db->where("contrasena", $contrasena);
		$resultados = $this->db->get("usuario");

		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
	public function rol($idRol){
		$this->db->where("idRol",$idRol);
		$resulRol=$this->db->get("rol");

		if ($resulRol->num_rows() > 0) {
			return $resulRol->row();
		}
		else{
			return false;
		}

	}


	public function getUsuarios(){
		$this->db->select("u.*,r.nombre as rol, re.nombre as restaurante");
		$this->db->from("usuario u");
		$this->db->join("rol r","u.idRol = r.idRol");
		$this->db->join("restaurante re","u.idRestaurante = re.idRestaurante");
		$this->db->where("u.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getRestauranteNombre($idRes){
		$this->db->select("re.nombre");
		$this->db->from("usuario u");
		$this->db->join("restaurante re","u.idRestaurante = re.idRestaurante");
		$this->db->where("re.idRestaurante",$idRes);
		$resultado = $this->db->get("usuario");
		return $resultado->row();
	}
	public function getRolNombre($idRol){
		$this->db->select("ro.nombre");
		$this->db->from("usuario u");
		$this->db->join("rol ro","u.idRol = ro.idRol");
		$this->db->where("ro.idRol",$idRol);
		$resultado = $this->db->get("usuario");
		return $resultado->row();
	}

	public function getUsuario($id){
		$this->db->where("idUsuario",$id);
		$resultado = $this->db->get("usuario");
		return $resultado->row();
	}
	
	public function save($data){
		return $this->db->insert("usuario",$data);
	}

	
	public function update($id,$data){
		$this->db->where("idUsuario",$id);
		return $this->db->update("usuario",$data);
	}



}
