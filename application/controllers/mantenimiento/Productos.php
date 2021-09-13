<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Productos_model");
		$this->load->model("Categorias_model");
		$this->load->model("Restaurantes_model");
		$this->load->model("Usuarios_model");
	}

	public function index()
	{
		
	//	$idRestaurante = $this->session->userdata("idUsuario")
		$idRestaurante=2;
		//$idRestaurante=1;
		//$idRestaurante=$this->Restaurantes_model->getRestaurante(2);
		$data  = array(
			'productos' => $this->Productos_model->getProductos($idRestaurante), 
			
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/productos/list",$data);
		
		$this->load->view("layouts/footer");

	}
	public function add(){

		//$color = 'azul';
		//$data=array('color' => $color)
    	//	$this->load->view("vista_view", array('color' => $color));
		$data =array( 
			"categorias" => $this->Categorias_model->getCategorias(),
			"restaurantes" =>$this->Restaurantes_model->getRestaurantes()
			
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/productos/add",$data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		//		$restaurante=$this->Restaurantes_model->getRestaurantes();
		//		$idRestaurante=$restaurante->idRestaurante;
		//$idRestaurante=1;
	
 		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precio = $this->input->post("precio");
		$fotoProducto = $this->input->post("fotoProducto");
		$categoria = $this->input->post("categoria");
		$idRestaurante = $this->input->post("restaurante");
	

	//	$restaurante=

		//$this->form_validation->set_rules("codigo","Codigo","required|is_unique[productos.codigo]");
		$this->form_validation->set_rules("nombre","Nombre","required");
		$this->form_validation->set_rules("precio","Precio","required");
		$this->form_validation->set_rules("descripcion","descripcion","required");

		//$this->form_validation->set_rules("fotoProducto","fotoProducto","required");

		if ($this->form_validation->run()) {
			$data  = array(
			//	'codigo' => $codigo, 
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'precio' => $precio,
				'fotoProducto' => $fotoProducto,
				'idCategoria' => $categoria,
				//'idRestaurante'=>$idRestaurante;
				'idRestaurante'=>$idRestaurante
				//'estado' => "1"
			);

			if ($this->Productos_model->save($data)) {
				redirect(base_url()."mantenimiento/productos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/productos/add");
			}
		}
		else{
			$this->add();
		}

		
	}

	public function edit($id){
		$data =array( 
			"producto" => $this->Productos_model->getProducto($id),
			"categorias" => $this->Categorias_model->getCategorias()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");

		$this->load->view("admin/productos/edit",$data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$idproducto = $this->input->post("idproducto");
		$codigo = $this->input->post("codigo");
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$precio = $this->input->post("precio");
		$stock = $this->input->post("stock");
		$categoria = $this->input->post("categoria");

		$productoActual = $this->Productos_model->getProducto($idproducto);

		if ($codigo == $productoActual->codigo) {
			$is_unique = '';
		}
		else{
			$is_unique = '|is_unique[productos.codigo]';
		}

		$this->form_validation->set_rules("codigo","Codigo","required".$is_unique);
		$this->form_validation->set_rules("nombre","Nombre","required");
		$this->form_validation->set_rules("precio","Precio","required");
		$this->form_validation->set_rules("stock","Stock","required");


		if ($this->form_validation->run()) {
			$data  = array(
				'codigo' => $codigo, 
				'nombre' => $nombre,
				'descripcion' => $descripcion,
				'precio' => $precio,
				'stock' => $stock,
				'categoria_id' => $categoria,
			);
			if ($this->Productos_model->update($idproducto,$data)) {
				redirect(base_url()."mantenimiento/productos");
			}
			else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."mantenimiento/productos/edit/".$idproducto);
			}
		}else{
			$this->edit($idproducto);
		}

		
	}
	public function delete($id){
		$data  = array(
			'estado' => "0", 
		);
		$this->Productos_model->update($id,$data);
		echo "mantenimiento/productos";
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