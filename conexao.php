<?php
$servername = "localhost";
$username = "id20554401_loginnegao";
$password = "Nowunited23-";
$dbname = "id20554401_databasenegao";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>