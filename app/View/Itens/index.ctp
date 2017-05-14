<h1>Itens</h1>
<?php echo $this->Html->Link('Adicionar item', array('controller' => 'itens', 'action' => 'add')); ?>
<table>
  <tr>
    <th>id</th>
    <th>nome</th>
    <th>quantidade</th>
    <th>action</th>
    <th>created</th>
    <th>modified</th>
    <th>pessoa_id</th>
  </tr>
  <?php foreach ($itens as $iten) { ?>
  <tr>
    <td><?php echo $iten['Iten']['id']; ?></td>
    <td><?php echo $this->Html->Link($iten['Iten']['nome'], array('controller' => 'itens', 'action' => 'view', $iten['Iten']['id'])); ?></td>
    <td><?php echo $iten['Iten']['quantidade']; ?></td>
    <td><?php echo $this->html->Link('Editar', array('controller' => 'itens', 'action' => 'edit', $iten['Iten']['id'])); ?> |
        <?php echo $this->Form->postLink('Deletar', array('action' => 'delete', $iten['Iten']['id']), array('confirm' => 'Deseja deletar o item?')); ?></td>
    <td><?php echo $iten['Iten']['created']; ?></td>
    <td><?php echo $iten['Iten']['modified']; ?></td>
    <td><?php echo $iten['Iten']['pessoa_id']; ?></td>
  </tr>
  <?php } ?>
</table>