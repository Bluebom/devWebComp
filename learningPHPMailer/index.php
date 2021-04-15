<?php
include('./config.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Olá Mundo!</h1>
    <?php
    if (isset($_POST["acao"])) {
        $postNome = $_POST['name'];
        $postEmail = $_POST['email'];
        $postText = $_POST['text'];
        if ($postEmail != '') {
            if (filter_var($postEmail, FILTER_VALIDATE_EMAIL)) {
                $info = ['subject' => "$postNome", 'body' => "<h1>$postNome</h1> <hr><h2><u>$postEmail</u></h2><hr> <h3>$postText</h3>"];
                $email = new Email('', 'franklin@franklinhenrique.com', '', 'FrankY');
                $email->addAddress('contato@franklinhenrique.com', 'Contato');
                $email->contentEmail($info);
                $email->sendEmail();
                echo "<script>alert('Formulário enviado com sucesso!')</script>";
            } else {
                echo "<script>alert('Email incorreto!')</script>";
            }
        }else{
            echo "<script>alert('verifique o campo email')</script>";
        }
    }
    ?>
    <form method="post" class='formulario'>
        <p><input type="text" name="name"></p>
        <p><input type="email" name="email"></p>
        <p><textarea name="text" cols="30" rows="10"></textarea></p>
        <input type="submit" value="Enviar" name="acao">
    </form>
</body>

</html>