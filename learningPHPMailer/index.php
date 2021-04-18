<?php
include('./config.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container">
        <h1>Olá Mundo!</h1>
        <form method="post" class='formulario'>
        <p><input type="text" name="name"></p>
        <p><input type="email" name="email"></p>
        <p><textarea name="msg" cols="30" rows="10"></textarea></p>
        <input type="submit" value="Enviar" name="acao">
    </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="./forms/forms.js"></script>

</html>