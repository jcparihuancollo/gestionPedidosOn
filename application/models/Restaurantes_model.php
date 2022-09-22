<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurantes_model extends CI_Model {
	
	public function getRestaurantes(){
		$this->db->select("r.*");
		$this->db->from("restaurante r");
		//$this->db->join("tipo_cliente tc", "c.tipo_cliente_id = tc.id");
		//$this->db->join("tipo_documento td", "c.tipo_documento_id = td.id");
		$this->db->where("r.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getRestaurante($id){
		$this->db->where("idRestaurante",$id);
		
		$resultado = $this->db->get("restaurante");
		return $resultado->row();

	}


	public function save($data){
		return $this->db->insert("restaurante",$data);
	}
	public function update($id,$data){
		$this->db->where("idRestaurante",$id);
		return $this->db->update("restaurante",$data);
	}
	public function eliminarRestaurante($id)
	{
		
		$this->db->where("idRestaurante",$id);
		 $this->db->delete("restaurante");
	}

/*	public function getTipoRestaurantes(){
		$resultados = $this->db->get("tipo_cliente");
		return $resultados->result();
	}

	public function getTipoDocumentos(){
		$resultados = $this->db->get("tipo_documento");
		return $resultados->result();
	}*/
}
