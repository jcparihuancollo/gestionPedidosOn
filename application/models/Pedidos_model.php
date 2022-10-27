<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_model extends CI_Model {

	public function getPedidos($id){
		$this->db->select("pe.idPedido, pe.descripcion, pe.estadoPedido,pe.idOperario, re.idRestaurante, re.nombre AS 	  NomREstaurante, cl.idCliente, cl.nombre AS nombredelcliente, ifnull(pe.idRepartidor,'') AS rePor,
			 us.idUsuario, us.nombres AS NomdelOperarioLocal,us.idRol ,pe.precioTotal AS totalBs");
		$this->db->from("pedido pe");
		$this->db->join("cliente cl "," cl.idCliente=pe.idCliente");
		$this->db->join("restaurante re "," re.idRestaurante=pe.idRestaurante");
		$this->db->join("usuario us ", "us.idUsuario=pe.idOperario","left");
	//this->db->where("cl.idCliente",$id);
		$this->db->where("re.idRestaurante",$id);
		//$this->db->where("pe.estadoPedido",'1');
		$this->db->order_bY('pe.estadoPedido', 'ASC');
	
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

	public function actualizarEstado($estado,$id){
	   return $this->db->set('estadoPedido',$estado)
        ->where('idpedido',$id)
        ->update('pedido');
	}

	public function actualizarOperario($idOperario,$id){
		 return $this->db->set('idOperario',$idOperario)
        ->where('idpedido',$id)
        ->update('pedido');

	}

	public function getUsuariosRepartidores(){
		$this->db->select("us.idUsuario,us.nombres");
		$this->db->from("usuario us");
		$this->db->join("pedido pe","pe.idPedido=us.idUsuario");
		
		$this->db->where("us.idRol",'8');
		// $this->db->where("pe.idPedido",$id);
		
	
		$resultados = $this->db->get();
		return $resultados->result();


	}
	public function getPedido($id){
		$this->db->select("*");
		$this->db->from("pedido p");
		$this->db->where("p.idpedido",$id);
	
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function actualizarRepartidor($idUs,$id){
		return $this->db->set('idRepartidor',$idUs)
        ->where('idpedido',$id)
        ->update('pedido');
	}
}