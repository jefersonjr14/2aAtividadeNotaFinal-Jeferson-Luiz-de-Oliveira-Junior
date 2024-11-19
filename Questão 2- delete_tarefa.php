<?php
include('database.php');
$db = getDbConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Exclui a tarefa do banco
    $stmt = $db->prepare("DELETE FROM tarefas WHERE id = :id");
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $stmt->execute();

    // Redireciona de volta para a página principal
    header('Location: index.php');
    exit();
}
?>
