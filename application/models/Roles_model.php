<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_model extends CI_Model {

	public function getRoles(){
		$this->db->where("estado","1");
		$resultados = $this->db->get("rol");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("rol",$data);
	}
	public function getRol($id){
		$this->db->where("idRol",$id);
		$resultado = $this->db->get("rol");
		return $resultado->row();

	}

	public function update($id,$data){
		$this->db->where("idRol",$id);
		return $this->db->update("rol",$data);
	}

		public function delete($id){
		$this->db->where("idRol",$id);
		return $this->db->delete("rol");
	}
}
