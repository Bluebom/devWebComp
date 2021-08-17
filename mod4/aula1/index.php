<?php
// user of mysql
$user = 'exampleMe';
$password = '8aca7EAE!!';
$database = 'mod4';
$table = 'clientes';

if (isset($_POST['acao'])) {
    // data
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('Y-m-d H-i-s');

    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $sql = $pdo->prepare("INSERT INTO $table VALUES (null, ?, ?, ?)");
    $sql->execute(array($nome, $sobrenome, $momento_registro));

    echo 'cliente inserido com sucesso!';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            background-color: blue;
        }

        form {
            width: 50%;
            height: 32%;
            background-color: #fff;
            box-shadow: .1rem .2rem 10px black;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            margin: 3rem auto;
            padding: 1rem;
            
        }
    </style>
</head>

<body>

    <form method='post'>
        <h1>Formulário</h1>
        <label>
            <p>Name: </p>
            <input type="text" name="nome" id="name" required>
        </label>
        <label>
            <p>Sobrenome: </p>
            <input type="text" name="sobrenome" id="surname" required>
        </label>
        <p><input type="submit" name="acao" value="Enviar"></p>
    </form>

</body>

</html>