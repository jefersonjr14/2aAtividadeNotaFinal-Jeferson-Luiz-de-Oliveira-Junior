<?php
include('database.php');
$db = getDbConnection();

// Consulta as tarefas no banco
$query = "SELECT * FROM tarefas ORDER BY id DESC";
$results = $db->query($query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Tarefas</title>
</head>
<body>
    <h1>Sistema de Gerenciamento de Tarefas</h1>

    <!-- Formulário para adicionar tarefas -->
    <form action="add_tarefa.php" method="POST">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" required>
        <label for="data_vencimento">Data de Vencimento:</label>
        <input type="date" name="data_vencimento" id="data_vencimento" required>
        <button type="submit">Adicionar Tarefa</button>
    </form>

    <h2>Tarefas Pendentes</h2>
    <ul>
        <?php while ($row = $results->fetchArray()) : ?>
            <?php if ($row['concluida'] == 0) : ?>
                <li>
                    <?= $row['descricao']; ?> (Vencimento: <?= $row['data_vencimento']; ?>)
                    <a href="update_tarefa.php?id=<?= $row['id']; ?>">Concluir</a> | 
                    <a href="delete_tarefa.php?id=<?= $row['id']; ?>">Excluir</a>
                </li>
            <?php endif; ?>
        <?php endwhile; ?>
    </ul>

    <h2>Tarefas Concluídas</h2>
    <ul>
        <?php
        $query = "SELECT * FROM tarefas WHERE concluida = 1 ORDER BY id DESC";
        $results = $db->query($query);
        while ($row = $results->fetchArray()) :
        ?>
            <li><?= $row['descricao']; ?> (Vencimento: <?= $row['data_vencimento']; ?>)</li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
