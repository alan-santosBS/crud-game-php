<?php
include("db.php");
$resultado = $db->query("SELECT * FROM jogos");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Lista de Jogos</title>
</head>
<body>
<h2>🎮 Lista de Jogos</h2>
<a href="adicionar.php">Adicionar novo jogo</a>
<br><br>

<table cellpadding="8">
<tr>
<th>ID</th><th>Nome</th><th>Gênero</th><th>Plataforma</th><th>Ano</th><th>Desenvolvedora</th><th>Ações</th>
</tr>

<?php while($jogo = $resultado->fetch_assoc()): ?>
<tr>
<td><?= $jogo['id'] ?></td>
<td><?= $jogo['nome'] ?></td>
<td><?= $jogo['genero'] ?></td>
<td><?= $jogo['plataforma'] ?></td>
<td><?= $jogo['ano'] ?></td>
<td><?= $jogo['desenvolvedora'] ?></td>
<td>
<a href="editar.php?id=<?= $jogo['id'] ?>">Editar</a> |
<a href="excluir.php?id=<?= $jogo['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
