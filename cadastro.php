<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro agenda</title>
</head>
<body>
    <h1>Cadastro Agenda</h1>

    <!-- Formulário HTML -->
<form action="" method="post">
  <label>Nome: </label><br>
  <input type="text" name="nome"><br>
  <label>Sobrenome: </label><br>
  <input type="text" name="sobrenome"><br>
  <label>Telefone: </label><br>
  <input type="text" name="telefone"><br>
  <input type="submit" value="Gravar">
</form>

<?php

    


//variaveis da conexão do banco dados

$servername = "localhost";
$username = "id19705063_escola";
$password = "S3nh4-b4nc0d4d0s";
$dbname = "id19705063_db1"; // nome do banco de dados que será usado

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Coleta os dados do formulário
  $nome = $_POST["nome"];
  $sobrenome = $_POST["sobrenome"];
  $telefone = $_POST["telefone"];

  // Insere os dados no banco de dados
  $sql = "INSERT INTO agenda (nome, sobrenome, telefone) VALUES ('$nome', '$sobrenome', '$telefone')";
  if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso"."<br>";
  } else {
    echo "Erro ao inserir dados: " . $conn->error;
  }
}
$conn->close();
?>


    <a href="index.php">Exibir Agenda</a>
    
</body>
</html>
