<h2><?php echo $pessoa['Pessoa']['nome']; ?></h2>

<p>CPF: <?php echo $pessoa['Pessoa']['cpf']; ?></p>

<p>Created: <?php if ($pessoa['Pessoa']['created'] == '') echo 'Não encontrado(a)'; else echo $pessoa['Pessoa']['created']; ?></p>

<p>Modified: <?php if ($pessoa['Pessoa']['modified'] == '') echo 'Não encontrado(a)'; else echo $pessoa['Pessoa']['modified']; ?></p>