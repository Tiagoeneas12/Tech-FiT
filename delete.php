<?php
session_start();
include_once("verifica.php");

if (!empty($_GET['id'])) {
    include_once("conexao.php");

    $id = $_GET['id'];

    // Prepara a consulta SELECT para verificar se o aluno existe
    $sqlSelect = "SELECT * FROM alunos WHERE id = :id";
    $stmt = $pdo->prepare($sqlSelect);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Verifica se o aluno foi encontrado
    if ($stmt->rowCount() > 0) {
        // Prepara a consulta DELETE para remover o aluno
        $sqlDelete = "DELETE FROM alunos WHERE id = :id";
        $stmtDelete = $pdo->prepare($sqlDelete);
        $stmtDelete->bindParam(':id', $id, PDO::PARAM_INT);
        $stmtDelete->execute();
    }
}

header('Location: aluno.php');
exit;
?>
