<?php
App::uses('AppModel', 'Model');

class Iten extends AppModel {
  public $name = 'Iten';
  public $hasOne = 'Pessoa';
  
  // validações não estão funcionando
  public $validate = array(
    'nome' => array(
      'required' = array(
        'rule' => 'notBlank',
        'message' => 'Vazio'
      )
    ),
    'quantidade' => array(
      'required' = array(
        'rule' => 'notBlank',
        'message' => 'Vazio'
      )
    )
  );
}
?>