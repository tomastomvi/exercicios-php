<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 30;
    $num2 = "30";

    if ($num1 === $num2) {
        echo "As variáveis são idênticas";
    }  else {
        echo "As variáveis não são idênticas";
    }
    
    echo "<br>";

    if ($num1 == $num2) {
        echo "As variáveis são iguais";
    } else {
        echo "As variáveis não são iguais";
    }
    ?>
</body>
</html>