<?php
require_once 'FormClass.php';
class LoadForm extends FormClass{
	private $nombre;
	private $codigo;
	private $precio;
	private $stock;
	private $categoria;
	private $thumb;

	function __construct($post,$files){
		$this->nombre = limpiarDatos((isset($post['nombre']) ? $post['nombre'] : ''));
		$this->codigo = limpiarDatos((isset($post['codigo']) ? $post['codigo'] : ''));
		$this->precio = limpiarDatos((isset($post['precio']) ? $post['precio'] : ''));
		$this->stock = limpiarDatos((isset($post['stock']) ? $post['stock'] : ''));
		$this->categoria = limpiarDatos((isset($post['categoria']) ? $post['categoria'] : ''));
		$this->thumb = limpiarDatos((isset($files['thumb']) ? $files['thumb']['tmp_name'] : ''));
	}

	public function isValid(){
		if (empty($this->nombre)) {
			$this->addError('nombre','Por favor escribir el nombre del producto');
		}
		if (empty($this->codigo)) {
			$this->addError('codigo','Por favor escribir el código del producto');
		}
		if (empty($this->precio)) {
			$this->addError('precio','Por favor escribir el precio del producto');
		}
		if (empty($this->stock)) {
			$this->addError('stock','Por favor escribir el stock del producto');
		}
		if (empty($this->thumb)) {
			$this->addError('thumb','Por favor cargar la imagen del producto');
		}
		return empty($this->errors);
	}
	public function getName(){
		return $this->nombre;
	}
	public function getCodigo(){
		return $this->codigo;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function getStock(){
		return $this->stock;
	}
	public function getCategoria(){
		return $this->categoria;
	}
	public function getThumb(){
		return $this->thumb;
	}


	
}


?>