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
<body>
<?php
    $objBD = new BD();
    $objBD->conn();
    $result = $objBD->select();
    foreach ($result as $item){
        echo "ID".$item['id']." Nome: ".$item['nome'] ."<br>";
    }
?>
    <form method="post">
    <label>Nome</label>
    <input text="text" name="nome" />

    <label>Telefone</label>
    <input text="text" name="telefone" />

    <label>CPF</label>
    <input text="text" name="cpf" />

    <input type="submit" value="Salvar" />
</form>
</body>
</html>
