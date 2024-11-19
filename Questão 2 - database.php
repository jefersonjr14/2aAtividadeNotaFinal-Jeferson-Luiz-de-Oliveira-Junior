<?php
// Função para conectar ao banco de dados SQLite.
function getDbConnection() {
    $db = new SQLite3('tarefas.db');  // Conecta ao banco de dados
    return $db;  // Retorna a conexão
}
?>
