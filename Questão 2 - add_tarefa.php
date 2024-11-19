<?php
include('database.php');
$db = getDbConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $descricao = $_POST['descricao'];
    $data_vencimento = $_POST['data_vencimento'];

    // Insere a tarefa no banco
    $stmt = $db->prepare("INSERT INTO tarefas (descricao, data_vencimento, concluida) VALUES (:descricao, :data_vencimento, 0)");
    $stmt->bindValue(':descricao', $descricao, SQLITE3_TEXT);
    $stmt->bindValue(':data_vencimento', $data_vencimento, SQLITE3_TEXT);
    $stmt->execute();

    // Redireciona para a página principal
    header('Location: index.php');
    exit();
}
?>
