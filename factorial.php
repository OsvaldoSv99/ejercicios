<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <form method="post">
        <label for="number">Ingresa un numero:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Calcular factorial</button>
    </form>
    <?php
    if($_POST){
        $numero = intval($_REQUEST['number']);
        $array = [];
        $resultado2=1;
        if (isset($numero) && $numero <= 0) {
            echo "Ingresa un numero correcto";
         return;   
        }

        echo $numero . '<br>';
        for ($i=1; $i <= $numero; $i++) {
            // Primera forma
            $array[] = $i;
            // Segunda forma
            $resultado2 *= $i;
        }
        
        $resultado1 = number_format(array_product($array));
        echo "Resultado 1 : " . $resultado1 . '<br>';

        echo "Resultado 2 : " . number_format($resultado2) . '<br>';

    }
     ?>
    
</body>
</html>