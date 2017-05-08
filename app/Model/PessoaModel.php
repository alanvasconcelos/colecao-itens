<?php
App::uses('AppModel', 'Model');

class Pessoa extends AppModel {
  public $name = 'Pessoa' ;
  public $hasMany = array('Iten');
  
  // validações não estão funcionando
  public $validate = array(
    'nome' => array(
      'rule' => 'notBlank'
    ),
    'cpf' => array(
      'rule' => 'notBlank'
    )
  );
}
?>
