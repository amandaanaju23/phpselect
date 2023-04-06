<?php
   include "conexao.php";
   if(isset($_POST['botao'])) {
    $usuario = $_POST["nome"];
    $senha = $_POST["senha"];

    $sql = "SELECT nome, senha FROM usuarios WHERE nome ='$usuario' AND senha ='$senha'";
    if($conn->query($sql)) {
        header ("Location: pagina_admin.php");
   }
?>
 