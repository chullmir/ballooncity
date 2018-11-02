<?php
abstract class FormClass{
  protected $errors;
  function __construct(){
    $this->errors = [];
  }
  public function addError($field,$texto){
    $this->errors[$field]=$texto;
  }
  public function fieldHasError($field){
    return isset($this->errors[$field]);
  }
  public function getFieldErrors($field){
    return isset($this->errors[$field]) ? $this->errors[$field] : '';
  }
  public function getErrors(){
    return $this->errors;
  }
  public abstract function isValid();
}

 ?>
