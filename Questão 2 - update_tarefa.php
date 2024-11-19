<?php
include('database.php');
$db = getDbConnection();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Marca a tarefa como concluída
    $stmt = $db->prepare("UPDATE tarefas SET concluida = 1 WHERE id = :id");
    $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
    $stmt->execute();

    // Redireciona de volta para a página principal
    header('Location: index.php');
    exit();
}
?>
