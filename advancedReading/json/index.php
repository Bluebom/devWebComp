<?php
// $json = '{
//     "Nome": "Franklin",
//     "Idade": 21,
//     "Cor": "branca" 
//     }';
// $obj = json_decode($json);
// $arr = json_decode($json, true);

// echo $obj->Nome .'<br>';
// echo $arr['Nome'];
// $arr = ['nome'=>'guilherme', 'idade'=>'21'];
// $json = json_encode($arr);
// echo $json;
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="../jquery.min.js"></script>
    <script>
        $(function() {
            $.ajax({
                url: 'request.php',
                dataType: 'json',
            }).done(function($data) {
                console.log($data);
            })
        })
    </script>
</body>

</html>