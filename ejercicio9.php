<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../algoritmos/estilos.css">
    <title>Document</title>
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
<p>9. Calcule el primedio de 5 calificaciones</p>
    <form method="post">
        <h2>Promedio de notas</h2>
        <label for="txtn1">Digite nota1:</label><br>
        <input type="text" id="txtn1" name="txtn1"><br>
        <label for="txtn2">Digite  nota2:</label><br>
        <input type="text" id="txtn2" name="txtn2"><br><br> 
        <label for="txtn3">Digite  nota3:</label><br>
        <input type="text" id="txtn3" name="txtn3"><br><br> 
        <label for="txtn4">Digite  nota4:</label><br>
        <input type="text" id="txtn4" name="txtn4"><br><br> 
        <label for="txtn5">Digite  nota5:</label><br>
        <input type="text" id="txtn5" name="txtn5"><br><br> 
        <input type="submit" value="Resultado" name="submit"><br>
    </form>
    <?php
    if(isset($_POST['submit'])){
      $nota1=$_POST['txtn1'];
      $nota2=$_POST['txtn2'];
      $nota3=$_POST['txtn3'];
      $nota4=$_POST['txtn4'];
      $nota5=$_POST['txtn5'];
      $sumanotas=$nota1+$nota2+$nota3+$nota4+$nota5;
      $promedio=$sumanotas/5;
      echo"el promedio de las notas es: $promedio";

      
    }
    ?>
</body>
</html>