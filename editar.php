<?php
include("db.php");
$id = $_GET['id'];
$jogo = $db->query("SELECT * FROM jogos WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $ano = $_POST['ano'];
    $desenvolvedora = $_POST['desenvolvedora'];

    $sql = "UPDATE jogos SET 
            nome='$nome', genero='$genero', plataforma='$plataforma', 
            ano='$ano', desenvolvedora='$desenvolvedora' 
            WHERE id=$id";
    $db->query($sql);

    header("Location: index.php");
}
?>

<form method="post">
<h2>Editar jogo</h2>
Nome: <input type="text" name="nome" value="<?= $jogo['nome'] ?>"><br>
Gênero: <input type="text" name="genero" value="<?= $jogo['genero'] ?>"><br>
Plataforma: <input type="text" name="plataforma" value="<?= $jogo['plataforma'] ?>"><br>
Ano: <input type="number" name="ano" value="<?= $jogo['ano'] ?>"><br>
Desenvolvedora: <input type="text" name="desenvolvedora" value="<?= $jogo['desenvolvedora'] ?>"><br><br>
<input type="submit" value="Salvar alterações">
</form>
