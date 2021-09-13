<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

	public function getProductos($id){
		$this->db->select("p.*,c.nombre as categoria, re.nombre as nombreRes");
		$this->db->from("producto p");
		$this->db->join("categoria c","p.idCategoria = c.idCategoria");
		$this->db->join("restaurante re","p.idRestaurante = re.idRestaurante");
		$this->db->where("p.estado","1");
		$this->db->where("p.idRestaurante",$id);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getProducto($id){
		$this->db->where("idProducto",$id);

		$resultado = $this->db->get("producto");
		return $resultado->row();
	}


	public function save($data){
		return $this->db->insert("producto",$data);
	}

	public function update($id,$data){
		$this->db->where("idProducto",$id);
		return $this->db->update("producto",$data);
	}

}