<?php
App::uses('AppModel', 'Model');

class Iten extends AppModel {
  public $name = 'Iten';
  public $hasOne = 'Pessoa';
  
  public $actsAs = array(
    'Upload.Upload' => array(
      'photo' => array(
        'fields' => array(
          'dir' => 'photo_dir'
        ),
        'thumbnailSizes' => array(
          'xvga' => '1024x768',
          'vga' => '640x480',
          'thumb' => '80x80'
        )
      )
    )
  );
  
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