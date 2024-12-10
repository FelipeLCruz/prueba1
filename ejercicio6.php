<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../algoritmos/estilos.css">
    <title>Operaciones Aritméticas</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="#">algoritmos</a>
            <ul>
                <li><a href="ejercicio1.php">Ejercicio1</a></li>
                <li><a href="ejercicio2.php">Ejercicio2</a></li>
                <li><a href="ejercicio3comentario.php">Ejercicio3</a></li>
                <li><a href="ejercicio4.php">Ejercicio4</a></li>
                <li><a href="ejercicio5.php">Ejercicio5</a></li>
                <li><a href="ejercicio6.php">Ejercicio6</a></li>
                <li><a href="ejercicio7.php">Ejercicio7</a></li>
                <li><a href="ejercicio8.php">Ejercicio8</a></li>
                <li><a href="ejercicio9.php">Ejercicio9</a></li>
                <li><a href="ejercicio10.php">Ejercicio10</a></li>
                <li><a href="ejercicio11.php">Ejercicio11</a></li>
                <li><a href="ejercicio12.php">Ejercicio12</a></li>
                <li><a href="ejercicio13.php">Ejercicio13</a></li>
                <li><a href="ejercicio15.php">Ejercicio15</a></li>
                <li><a href="ejercicio16.php">Ejercicio16</a></li>
                <li><a href="ejercicio17.php">Ejercicio17</a></li>
                <li><a href="ejercicio18.php">Ejercicio18</a></li>
                <li><a href="ejercicio19.php">Ejercicio19</a></li>
                <li><a href="ejercicio20.php">Ejercicio20</a></li>
            </ul>
        </li>
        <li><a href="#">GET</a>
            <ul>
                <li><a href="./ejercicio1get.php">Ejercicio1</a></li>
                <li><a href="./ejercicio2get.php">Ejercicio2</a></li>
                <li><a href="./ejercicio3get.php">Ejercicio3</a></li>
                <li><a href="./ejercicio4get.php">Ejercicio4</a></li>
                <li><a href="./ejercicio5get.php">Ejercicio5</a></li>
                <li><a href="./ejercicio6get.php">Ejercicio6</a></li>
                <li><a href="./ejercicio7get.php">Ejercicio7</a></li>
            </ul>
        </li>
        <li><a href="#">POST</a>
            <ul>
                <li><a href="./ejercicio1post.php">Ejercicio1</a></li>
                <li><a href="./ejercicio2post.php">Ejercicio2</a></li>
                <li><a href="./ejercicio3post.php">Ejercicio3</a></li>
                <li><a href="./ejercicio4post.php">Ejercicio4</a></li>
                <li><a href="./ejercico5post.php">Ejercicio5</a></li>
                <li><a href="./ejercicio6post.php">Ejercicio6</a></li>
            </ul>
        </li>
    </ul>
</nav>
<p>6. Programa que declarados 2 números calcule la suma, resta, multiplicación,
división, y modulo</p>
    <form method="post">
        <h2>Operaciones</h2>
        <label for="txtn1">Digite primer número:</label><br>
        <input type="text" id="txtn1" name="txtn1"><br>
        <label for="txtn2">Digite segundo número:</label><br>
        <input type="text" id="txtn2" name="txtn2"><br><br> 
        <input type="submit" value="Resultado" name="submit"><br>
    </form>
    <br><br>
    <?php
    if (isset($_POST['submit'])) {
        $n1 = ($_POST['txtn1']);
        $n2 = ($_POST['txtn2']);
        
        $r = $n1 + $n2;
        $r2 = $n1 - $n2;
        $r3 = $n1 * $n2;
        $r4 = $n2 != 0 ? $n1 / $n2 : 'No se puede dividir entre 0';
        $m = $n2 != 0 ? $n1 % $n2 : 'No se puede hallar el módulo con 0';
        
        echo '<label for="result1">Resultado de la suma:<br></label>';
        echo '<input type="text" id="result1" value="' . $r . '" readonly><br>';
        
        echo '<label for="result2">Resultado de la resta:<br></label>';
        echo '<input type="text" id="result2" value="' . $r2 . '" readonly><br>';
        
        echo '<label for="result3">Resultado de la multiplicación:<br></label>';
        echo '<input type="text" id="result3" value="' . $r3 . '" readonly><br>';
        
        echo '<label for="result4">Resultado de la división:<br></label>';
        echo '<input type="text" id="result4" value="' . $r4 . '" readonly><br>';
        
        echo '<label for="result5">Resultado del módulo:<br></label>';
        echo '<input type="text" id="result5" value="' . $m . '" readonly>';
    }
    ?>
</body>
</html>