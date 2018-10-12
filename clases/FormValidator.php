<?php
  abstract class FormValidator{
    protected $errors;
    function __construct(){
      $this->erros = [];
    }
      public function fieldHasError($field){
        return isset($this->errors[$field]);
      }
      public function getFieldErrors($field){
        return (isset($this->errors[$field]) ? $this->errors[$field] : '');
      }
      public function getAllErrors(){
        return $this->errors;
      }
      public function cargarError($campo,$texto){
  			$this->errors[$campo]=$texto;
  		}
      
      // NO ENTIENDO POR QUE ESTO:
      // public abstract function isValid();

  }


 ?>
