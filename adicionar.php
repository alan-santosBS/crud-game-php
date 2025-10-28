<?php
include("db.php");

if ($_POST) {
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $plataforma = $_POST['plataforma'];
    $ano = $_POST['ano'];
    $desenvolvedora = $_POST['desenvolvedora'];

    $sql = "INSERT INTO jogos (nome, genero, plataforma, ano, desenvolvedora)
            VALUES ('$nome', '$genero', '$plataforma', '$ano', '$desenvolvedora')";
    $db->query($sql);

    header("Location: index.php");
}
?>

<form method="post">
<h2>Adicionar novo jogo</h2>
Nome: <input type="text" name="nome" required><br>
Gênero: <input type="text" name="genero"><br>
Plataforma: <input type="text" name="plataforma"><br>
Ano: <input type="number" name="ano"><br>
Desenvolvedora: <input type="text" name="desenvolvedora"><br><br>
<input type="submit" value="Salvar"><br>
<a href="index.php">Voltar</a>
</form>
