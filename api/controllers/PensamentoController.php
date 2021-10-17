<?php
  namespace Api\controllers;

  use Api\models\Pensamento;

  class PensamentoController {

    public function get($username = null){
      if($username)
        return Pensamento::listByUsername($username);
      else
        return Pensamento::list();
    }

    public function post($id = null){
      $data = $_POST;

      if($id)
        return Pensamento::update($data, $id);
      else
        return Pensamento::create($data);
    }

    public function delete($id){
      return Pensamento::delete($id);
    }
  }
?>