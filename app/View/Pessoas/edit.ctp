<h2>Editar Pessoa</h2>
<?php
  echo $this->Form->create('Pessoa');
  echo $this->Form->input('nome', array('label' => 'Nome: '));
  echo $this->Form->input('cpf', array('type' => 'text', 'label' => 'CPF: '));
  echo $this->Form->input('id', array('type' => 'hidden'));
  echo $this->Form->end('Salvar');
?>