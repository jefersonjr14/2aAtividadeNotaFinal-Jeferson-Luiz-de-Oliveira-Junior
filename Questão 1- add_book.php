<?php
// Incluindo o arquivo de conexão com o banco de dados
include('database.php');

// Consulta todos os livros cadastrados no banco de dados
$pdo = conectar();
$sql = "SELECT * FROM livros";
$stmt = $pdo->query($sql);
$livros = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livraria</title>
</head>
<body>
    <h1>Livros cadastrados</h1>

    <!-- Exibe todos os livros cadastrados -->
    <ul>
        <?php foreach ($livros as $livro): ?>
            <li>
                <?php echo $livro['titulo']; ?> - <?php echo $livro['autor']; ?> (<?php echo $livro['ano']; ?>)
                <!-- Link para excluir o livro -->
                <a href="delete_book.php?id=<?php echo $livro['id']; ?>">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Formulário para adicionar um novo livro -->
    <h2>Adicionar Novo Livro</h2>
    <form action="add_book.php" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" required><br>

        <label for="ano">Ano de Publicação:</label>
        <input type="number" name="ano" id="ano" required><br>

        <button type="submit">Adicionar Livro</button>
    </form>
</body>
</html>
