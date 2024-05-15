<?php 

$nome = "Walter"; 
$apelido = "Junior"; 
$nome_completo = "$nome $apelido";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $nome_completo ?></p>
    <p><?= "O meu nome tem: " . strlen($nome_completo) . " caracteres." ?></p>
</body>
</html>


