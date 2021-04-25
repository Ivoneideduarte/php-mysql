<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
</head>
<body>
    <h1>Gerenciador de tarefas</h1>
    <form action="">
        <fieldset>
            <legend>Nova tarefa</legend>
            <label for="">
                Tarefa: <input type="text" name="nome"/>
            </label>
            <input type="submit" value="Cadastrar"/>
        </fieldset>
    </form>
    <?php
        /*
        if (isset($_GET['nome']))
        { // isset() Verifica se uma variável existe 
            echo "Nome informado: " . $_GET['nome'];
        }
        */
        $lista_tarefas = array();

        if (isset($_GET['nome']))
        { // Verifica se existe o índice 'nome' dentro de $_GET
            $_SESSION['lista_tarefas'][] = $_GET['nome']; // $_SESSION serve para escrever e ler  informações e mantér os dados
        }

        $lista_tarefas = array();

        if (isset($_SESSION['lista_tarefas']))
        {
            $lista_tarefas = $_SESSION['lista_tarefas'];
        }
    ?>
    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
            <?php foreach ($lista_tarefas as $tarefa) : ?>
            <!-- Este laço serve para passar por todos os índices de um array, atribuindo cada índice a uma variável que escolhemos, no caso, a variável $tarefa -->
                <tr>
                    <td><?php echo $tarefa; ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>