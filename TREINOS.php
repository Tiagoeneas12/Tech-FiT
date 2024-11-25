<?php
session_start();

// Verifica se o usuário está logado
include_once "verifica.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: #fff;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 90%;
            max-width: 500px;
        }

        h1,
        h2,
        h3 {
            text-align: center;
        }

        fieldset {
            border: none;
            margin: 10px 0;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            display: block;
        }

        input,
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        .form-check-inline {
            margin-right: 10px;
        }

        .form-check-label {
            font-weight: normal;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgb(20, 147, 220);
            color: #fff;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: rgb(17, 54, 71);
        }

        #dadosTreino,
        #treinosAdicionados {
            margin-top: 15px;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            list-style: disc;
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
</head>

<body>
    <div class="container">
        <h1>Formulário de Treino</h1>
        <div class="btn-voltar">
            <a href="dashboard.php">VOLTAR</a>
        </div>
        <form id="formTreino">
            <fieldset>
                <legend>Dados do Aluno</legend>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" placeholder="Digite sua idade" required>

                <label for="genero">Gênero:</label>
                <div class="form-check form-check-inline">
                    <input type="radio" name="genero" value="Masculino" id="masculino" required>
                    <label class="form-check-label" for="masculino">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" name="genero" value="Feminino" id="feminino" required>
                    <label class="form-check-label" for="feminino">Feminino</label>
                </div>

                <label for="objetivo">Objetivo:</label>
                <select id="objetivo" name="objetivo" required>
                    <option value="Emagrecimento">Emagrecimento</option>
                    <option value="Hipertrofia">Hipertrofia</option>
                    <option value="Definição">Definição muscular</option>
                    <option value="Manutenção">Manutenção</option>
                </select>
            </fieldset>
        </form>

        <div id="dadosTreino"></div>

        <h2>Adicionar Treinos</h2>
        <form id="formTreinos">
            <fieldset>
                <legend>Informações do Treino</legend>
                <label for="nomeTreino">Nome do Treino:</label>
                <input type="text" id="nomeTreino" name="nomeTreino" placeholder="Ex: Treino A" required>

                <label for="exercicio">Exercício:</label>
                <input type="text" id="exercicio" name="exercicio" placeholder="Ex: Supino Reto" required>

                <label for="series">Séries:</label>
                <input type="text" id="series" name="series" placeholder="Ex: 1, 2, 3, 4" required>
            </fieldset>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>
