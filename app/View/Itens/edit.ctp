<h2>Editar Item</h2>
<?php
  echo $this->Form->create('Iten');
  echo $this->Form->input('id', array('type' => 'hidden'));
  echo $this->Form->input('nome', array('label' => 'Nome: '));
  echo $this->Form->input('quantidade', array('label' => 'Quatidade: '));
  echo $this->Form->input('photo', array('label' => 'Foto:', 'type' => 'file'));
  echo $this->Form->input('pessoa_id', array('label' => 'Pessoa: ', 'options' => array('' => '--Pessoa--', $pessoas)));
  echo $this->Form->end('Salvar');
?>