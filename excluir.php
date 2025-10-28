<?php
include("db.php");
$id = $_GET['id'];
$db->query("DELETE FROM jogos WHERE id=$id");
header("Location: index.php");
?>
