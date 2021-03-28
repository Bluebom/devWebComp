<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <?php
        // if(isset($_GET['subm'])){
        //     $nome = $_GET['nome'];
        //     $email = $_GET['email'];
            
        //     echo "<h1>Seu nome é: $nome e o email: $email</h1>";
        // }

        if(isset($_POST['subm'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            
            echo "<h1>Seu nome é: $nome e o email: $email</h1>";
        }

    ?>

    <form method="post">
        <label for="name"><p>Nome:</p></label>
        <input type="text" name="nome" id="name">
        <label for="mail"><p>Email:</p></label>
        <input type="email" name="email" id="mail">
        <p><input type="submit" name="subm" value="Enviar"></p>
    </form>
</body>
</html>