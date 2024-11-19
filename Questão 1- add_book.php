<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];

    // Conecta ao banco de dados
    include('database.php');
    $pdo = conectar();

    // Prepara a consulta para inserir o novo livro
    $sql = "INSERT INTO livros (titulo, autor, ano) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);

    // Executa a consulta, passando os dados coletados do formulário
    $stmt->execute([$titulo, $autor, $ano]);

    // Redireciona de volta para a página principal após adicionar o livro
    header('Location: index.php');
}
?>
