<h1>Adicionar item</h1>
<?php
  echo $this->Form->create('Iten', array('type' => 'file'));
  echo $this->Form->input('Iten.nome', array('label' => 'Nome: '));
  echo $this->Form->input('Iten.quantidade', array('label' => 'Quatidade: '));
  echo $this->Form->input('Iten.photo', array('type' => 'file'));
  echo $this->Form->input('Iten.photo_dir', array('type' => 'hidden'));
  echo $this->Form->input('Iten.pessoa_id', array('label' => 'Pessoa: ', 'options' => array('' => '--Pessoa--', $pessoas)));
  echo $this->Form->end('Salvar');
?>