<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "games";

$db = new mysqli($host, $usuario, $senha, $banco);

if ($db->connect_error) {
    die("Erro na conexão: " . $db->connect_error);
}
?>
