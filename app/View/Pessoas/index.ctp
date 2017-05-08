<h1>Pessoas</h1>
<?php echo $this->Html->Link('Adicionar pessoa', array('controller' => 'pessoas', 'action' => 'add')); ?>
<table>
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Action</th>
    <th>Created</th>
    <th>Modified</th>
  </tr>
  <?php foreach ($pessoas as $pessoa) { ?>
  <tr>
    <td><?php echo $pessoa['Pessoa']['id']; ?></td>
    <td><?php echo $this->Html->Link($pessoa['Pessoa']['nome'], array('controller' => 'pessoas', 'action' => 'view', $pessoa['Pessoa']['id'])); ?></td>
    <td><?php echo $pessoa['Pessoa']['cpf']; ?></td>
    <td><?php echo $this->Html->link('Editar', array('controller' => 'pessoas', 'action' => 'edit', $pessoa['Pessoa']['id'])) . ' | ' .
                   $this->Form->postLink('Deletar', array('action' => 'delete', $pessoa['Pessoa']['id']), array('confirm' => 'Vc quer excluir a pessoa?')) . ' | ' .
                   $this->Html->Link('Add Item', array('controller' => 'itens', 'action' => 'add')) . ' | ' .
                   $this->Html->Link('Ver Itens', array('controller' => 'itens', 'action' => 'seeItens', $pessoa['Pessoa']['id'])); ?></td>
    <td><?php echo $pessoa['Pessoa']['created']; ?></td>
    <td><?php echo $pessoa['Pessoa']['modified']; ?></td>
  </tr>
  <?php } ?>
</table>