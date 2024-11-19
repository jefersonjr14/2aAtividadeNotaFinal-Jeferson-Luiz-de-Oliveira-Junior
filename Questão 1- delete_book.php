<?php
// Verifica se o ID do livro foi passado na URL
if (isset($_GET['id'])) {
    // Captura o ID e realiza a exclusão
    $id = $_GET['id'];
    include('database.php');
    $pdo = conectar();
    $sql = "DELETE FROM livros WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    // Redireciona para a página principal após excluir
    header('Location: index.php');
}
?>
