<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_detalle_model extends CI_Model {

	public function getDetalle($id){
		$this->db->select("*");
		$this->db->from("detalle d ");
		$this->db->join("producto p "," d.idproducto=p.idproducto");
		$this->db->join("pedido pe "," d.idPedido=pe.idPedido");
		$this->db->where("d.idpedido",$id);


	
		$resultados = $this->db->get();
		return $resultados->result();

		//return $resultados->row_array();
	}

	public function getEstadoPedido($id){
		$this->db->select("*");
		$this->db->from("detalle d ");
		$this->db->join("producto p "," d.idproducto=p.idproducto");
		$this->db->join("pedido pe "," d.idPedido=pe.idPedido");
		$this->db->where("d.idpedido",$id);
	
		$resultados = $this->db->get();
		//return $resultados->result();

		return $resultados->row_array();
	}
	

}