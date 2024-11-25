<?php
session_start();
include_once("verifica.php");
include_once("conexao.php");

if (isset($_POST['submit'])) {
    // Recebendo os dados do formulário
    $plano = $_POST['plano'];
    $data = $_POST['dataVencimento']; // Mantém o nome do campo do formulário
    $pagamento = $_POST['formaPagamento'];

    try {
        // Ajustando a consulta SQL para PDO com parâmetros nomeados
        $sql = "INSERT INTO financeiro (plano, data, pagamento) VALUES (:plano, :data, :pagamento)";

        // Preparando a consulta
        $stmt = $pdo->prepare($sql);

        // Bind dos parâmetros
        $stmt->bindParam(':plano', $plano);
        $stmt->bindParam(':data', $data);
        $stmt->bindParam(':pagamento', $pagamento);

        // Executando a consulta
        $stmt->execute();

        echo "<script>alert('Dados inseridos com sucesso!'); window.location.href = 'financeiro.php';</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Erro ao inserir dados: " . $e->getMessage() . "'); window.location.href = 'financeiro.php';</script>";
    }
}
?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financeiro</title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        color: #fff;
    }

    fieldset {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 20px;
        border: none;
        width: 300px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 5px;
    }

    select,
    input {
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 5px;
        border: none;
        font-size: 1em;
        background-color: rgba(255, 255, 255, 0.8);
        color: #333;
    }

    button {
        background-color: rgb(20, 147, 220);
        border: none;
        padding: 10px 0;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
        font-size: 1em;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: rgb(17, 54, 71);
    }




    input[type="submit"] {
        background-color: rgb(20, 147, 220);
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
        margin-top: 5px;
    }

    input[type="submit"]:hover {
        background-color: rgb(17, 54, 71);
    }

    .btn-voltar a {
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        background-color: rgb(20, 147, 220);
        cursor: pointer;
        transition: background-color 0.3s;
        padding: 0.5% 2%;
        font-weight: 800;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    .btn-voltar a:hover {
        background-color: rgb(17, 54, 71);
    }
</style>

<body>
    <div class="btn-voltar">
        <a href="dashboard.php">VOLTAR</a>
    </div>
    <fieldset>
        <form action="financeiro.php" method="post">

            <label for="plano">Plano:</label>
            <select id="plano" name="plano" required>
                <option value="">Selecione um plano</option>
                <option value="basico">Básico</option>
                <option value="intermediario">Intermediário</option>
                <option value="avancado">Avançado</option>
            </select><br><br>


            <!-- Campo para inserir a data de vencimento -->
            <label for="dataVencimento">Data de Vencimento:</label>
            <input type="date" id="dataVencimento" name="dataVencimento" required>
            <br><br>

            <!-- Campo para selecionar a forma de pagamento -->
            <label for="formaPagamento">Forma de Pagamento:</label>
            <select id="formaPagamento" name="formaPagamento" required>
                <option value="">Selecione a forma de pagamento</option>
                <option value="cartaoCredito">Cartão de Crédito</option>
                <option value="boleto">Boleto Bancário</option>
                <option value="pix">PIX</option>
                <option value="transferencia">Transferência Bancária</option>
            </select>
            <br><br>

            <!-- Botão de envio -->
            <input type="submit" name="submit" id="submit">

        </form>
    </fieldset>
</body>


</html>