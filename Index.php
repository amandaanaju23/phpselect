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
$servername = "localhost";
$username = "usuario";
$password = "senha";
$dbname = "nome_do_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT nome, sobrenome, telefone FROM nome_da_tabela";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_assoc()) {
        echo $linha["nome"] . " " . $linha["sobrenome"] . " - " . $linha["telefone"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

$conn->close();
?>

    
</body>
</html>


