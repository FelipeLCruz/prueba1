<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../algoritmos/estilos.css">
    <title>Determinar si un número es Par o Impar</title>
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
<p>6. Elabore un programa para determinar si un numero es par o impar</p>
    <h1>determinar si un numero es par o impar</h1>
    <form method="get">
        <label for="numero">Digite un número por favor:</label>
        <input type="number" name="numero"><br><br>
        <input type="submit" value="Verificar"name="submit">
    </form>
    <?php
    if(isset($_GET['submit'])){
        $numero=$_GET['numero'];
        if ($numero%2==0){
            echo"<h2>El número $numero es Par.</h2>";
        } else {
            echo"<h2>El número $numero es Impar.</h2>";
        }
    }
    ?>
</body>
</html>
