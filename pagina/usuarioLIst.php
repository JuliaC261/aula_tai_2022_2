<?php
    include "./database/bd.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="./usuarioForm.php">Cadastrar</a>
<body>
    <h2>Listagem Clientes</h2>

<?php

echo " <table>
<tr>
  <th>ID</th>
  <th>Nome</th>
  <th>Telefone</th>
  <th>ID</th>
</tr>
<tr>
  <td>Alfreds Futterkiste</td>
  <td>Maria Anders</td>
  <td>Germany</td>
</tr>
<tr>
  <td>Centro comercial Moctezuma</td>
  <td>Francisco Chang</td>
  <td>Mexico</td>
</tr>
</table> ";
    $objBD = new BD();
    $objBD->conn();
    $result = $objBD->select();
    foreach ($result as $item){
        echo "ID".$item['id']." Nome: ".$item['nome'] ."<br>";
    }
?>

<a href="../index.php">Voltar</a>

</body>
</html>