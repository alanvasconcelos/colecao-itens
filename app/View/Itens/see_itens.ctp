<h1>Itens individuais</h1>
<?php
  foreach ($itens as $iten) {
    echo '-> Item: ' . $iten['Iten']['nome'] . ' / Qtd: ' . $iten['Iten']['quantidade'] . '</br>';
  }
?>