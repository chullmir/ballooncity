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
      public function addError($campo,$texto){
  			$this->errors[$campo]=$texto;
  		}
      public abstract function isValid();
  }
?>
