<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda do prof. Edney</h1>
<?php
$servername = "localhost";
$username = "id19705063_escola";
$password = "S3nh4-b4nc0d4d0s";
$dbname = "id19705063_db1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT nome, sobrenome, telefone FROM agenda";
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

<a href="cadastro.php">Inserir novo cadastro</a>

    
</body>
</html>


