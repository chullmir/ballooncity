<?php
require_once 'FormClass.php';
class LoadForm extends FormClass{
	private $nombre;
	private $codigo;
	private $tipo;
	private $precio;
	private $stock;
	private $categorias;
	private $thumb;
	private $marca;

	function __construct($post,$files){
		$this->codigo = limpiarDatos((isset($post['codigo']) ? $post['codigo'] : ''));
		$this->nombre = limpiarDatos((isset($post['nombre']) ? $post['nombre'] : ''));
		$this->stock = limpiarDatos((isset($post['stock']) ? $post['stock'] : ''));
		$this->tipo = limpiarDatos((isset($post['tipo']) ? $post['tipo'] : ''));
		$this->precio = limpiarDatos((isset($post['precio']) ? $post['precio'] : ''));
		$this->categorias = limpiarDatos((isset($post['categorias']) ? $post['categorias'] : ''));
		$this->thumb = limpiarDatos((isset($files['thumb']) ? $files['thumb']['tmp_name'] : ''));
		$this->marca = limpiarDatos((isset($post['marca']) ? $post['marca'] : ''));
	}

	public function isValid(){
		if (empty($this->nombre)) {
			$this->addError('nombre','Por favor escribir el nombre del producto');
		}
		if (empty($this->codigo)) {
			$this->addError('codigo','Por favor escribir el código del producto');
		}
		if (empty($this->tipo)) {
			$this->addError('tipo','Por favor escribir el tipo del producto');
		}
		if (empty($this->precio)) {
			$this->addError('precio','Por favor escribir el precio del producto');
		}
		if (empty($this->stock)) {
			$this->addError('stock','Por favor escribir el stock del producto');
		}
		if (empty($this->categorias)) {
			$this->addError('categorias','Por favor escribir alguna categoría del producto');
		}
		if (empty($this->thumb)) {
			$this->addError('thumb','Por favor cargar la imagen del producto');
		}
		if (empty($this->marca)) {
			$this->addError('marca','Por favor cargar la marca del producto');
		}
		return empty($this->errors);
	}
	public function getName(){
		return $this->nombre;
	}
	public function getCodigo(){
		return $this->codigo;
	}
	public function getTipo(){
		return $this->tipo;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function getStock(){
		return $this->stock;
	}
	public function getCategorias(){
		return $this->categorias;
	}
	public function getThumb(){
		return $this->thumb;
	}
	public function getMarca(){
		return $this->marca;
	}


	
}


?>