<?php
$servername = "localhost";
$username = "usuario";
$password = "senha";
$dbname = "nome_do_banco_de_dados";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$sql = "SELECT nome, sobrenome, telefone FROM nome_da_tabela";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) > 0) {
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo $linha["nome"] . " " . $linha["sobrenome"] . " - " . $linha["telefone"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}

mysqli_close($conn);
?>
