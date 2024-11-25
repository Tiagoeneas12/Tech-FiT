<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Aluno</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            color: #fff;
        }

        .box {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            width: 95%;
            max-width: 1200px;
            text-align: center;
            overflow: hidden;
        }

        fieldset {
            border: none;
        }

        form {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 5px;
            align-items: center;
            margin: 0;
        }

        label {
            text-align:justify;
            width: 100%;
            margin: 0;
            font-size: 0.9em;
            padding: 0; /* Remove o padding */
            display: block;
        }

        input[type="text"],
        input[type="password"],
        input[type="tel"],
        input[type="date"],
        input[type="submit"],
        input[type="radio"] {
            margin: 0; /* Remove margens extras */
            padding: 8px;
            border-radius: 5px;
            border: none;
            width: 100%;
            font-size: 1em;
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
            box-sizing: border-box;
            margin-top: 0; /* Remove a margem superior */
        }

        input[type="submit"] {
            background-color: rgb(20, 147, 220);
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
            font-weight: 800;
        }

        input[type="submit"]:hover {
            background-color: rgb(17, 54, 71);
        }

        h1 {
            margin-bottom: 20px;
        }

        .radio-group {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
            margin-top: 5px;
        }

        .radio-group label {
            margin: 0;
            width: auto;
        }

        p {
            text-align: left;
            width: 100%;
            margin: 10px 0 5px;
            font-size: 1em;
        }

        .radio-group input[type="radio"] {
            width: auto;
            margin-right: 5px;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .box {
                width: 100%;
                padding: 10px;
            }

            input[type="text"],
            input[type="password"],
            input[type="tel"],
            input[type="date"],
            input[type="submit"],
            input[type="radio"] {
                width: 100%;
            }

            .radio-group {
                width: 100%;
                flex-direction: column;
            }
        }

        a{
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
            text-decoration: none;
            text-decoration-line: none;
        }
        

        a:hover {
            background-color: rgb(17, 54, 71);
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>Novo Aluno</h1>
        <fieldset>
            <form action="recebe_aluno_novo.php" method="POST">
                <label for="nome">Nome completo</label>
                <input type="text" name="nome" id="nome" required>

                <label for="email">Email</label>
                <input type="text" name="email" id="email" required>

                <label for="telefone">Telefone</label>
                <input type="tel" name="telefone" id="telefone" required>

                <p>Sexo:</p>
                <div class="radio-group">
                    <label><input type="radio" id="feminino" name="genero" value="feminino" required> Feminino</label>
                    <label><input type="radio" id="masculino" name="genero" value="masculino" required> Masculino</label>
                    <label><input type="radio" id="outro" name="genero" value="outro" required> Outro</label>
                </div>

                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>

                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" required>

                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado" required>

                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" required>
                

                <input type="submit" name="submit" id="submit">
            </form>
        </fieldset>
        <a href="dashboard.php">VOLTAR</a>
    </div>
    
</body>
</html>






