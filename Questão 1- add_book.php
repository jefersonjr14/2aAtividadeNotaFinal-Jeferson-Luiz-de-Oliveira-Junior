<?php
// Verifica se os dados foram enviados pelo formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coleta os dados enviados
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];

    // Conecta ao banco de dados e insere o novo livro
    include('database.php');
    $pdo = conectar();
    $sql = "INSERT INTO livros (titulo, autor, ano) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$titulo, $autor, $ano]);

    // Redireciona para a página principal após adicionar
    header('Location: index.php');
}
?>
