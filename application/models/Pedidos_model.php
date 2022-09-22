<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_model extends CI_Model {

	public function getPedidos($id){
		$this->db->select("pe.idPedido, pe.descripcion, pe.estadoPedido, re.idRestaurante, re.nombre AS 	NomREstaurante, cl.idCliente, cl.nombre AS nombredelcliente,
			 us.idUsuario, us.nombres AS NomdelOperarioLocal,us.idRol");
		$this->db->from("pedido pe");
		$this->db->join("cliente cl "," cl.idCliente=pe.idCliente");
		$this->db->join("restaurante re "," re.idRestaurante=pe.idRestaurante");
		$this->db->join("usuario us ", "us.idUsuario=pe.idOperario");
	//this->db->where("cl.idCliente",$id);
		$this->db->where("re.idRestaurante",$id);
	
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