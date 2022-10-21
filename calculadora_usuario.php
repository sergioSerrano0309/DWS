<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    ini_set('display_errors', 'On');
    ini_set('html_errors', 0);
    require("calculadora.php");
    
    echo "Ejercicio 1<br>";
    $factorial = new Calculadora();
    echo $factorial->factorial(7);
    

    echo "<br><br>";

    echo "Ejercicio 2<br>";
    $binomial = new Calculadora;
    echo $binomial->coeficienteBinomial(5,2);

    echo "<br><br>";

    echo "Ejercicio 3<br>";
    $binario = new Calculadora;
    echo $binario->convierteBinarioDecimal("1000");

    echo "<br><br>";

    echo "Ejercicio 4<br>";
    $sumaNumerosPares = new Calculadora;
    echo $sumaNumerosPares->sumaNumerosPares([1, 2, 3, 4, 8, 6, 15]);

    echo "<br><br>";
    echo "Ejercicio 5<br>";
    $esPalindromo = new Calculadora;
    echo $esPalindromo->esPalindromo("perro");

    echo "<br><br>";
    echo "Ejercicio 6<br>";
    $sumaMatrices = new Calculadora;       
    $sumaMatrices->sumaMatrices([[2, 1], [1, 2]], [[1, 2], [2, 1]]);
 
    
    ?>
    
</body>
</html>