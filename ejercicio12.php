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
<p>12. Las notas de una universidad se distribuyen en los siguientes porcentajes 10%, 30%
20% 40%, al leer cuatro notas a que promedio equivale</p>
    <form action="" method="post">
      <label for="">Digite la nota que equivale al 10%</label><br>
      <input type="text" name="nota1"></label><br>
      <label for="">Digite la nota que equivale al 30%</label><br>
      <input type="text" name="nota2"></label><br>
      <label for="">Digite la nota que equivale al 20%</label><br>
      <input type="text" name="nota3"></label><br>
      <label for="">Digite la nota que equivale al 40%</label><br>
      <input type="text" name="nota4"></label><br><br>
      <input type="submit" value="calcular los porcentajes" name="submit"><br><br>
    </form>
    <?php
    if(isset($_POST['submit'])){
      $nota1=$_POST['nota1'];
      $nota2=$_POST['nota2'];
      $nota3=$_POST['nota3'];
      $nota4=$_POST['nota4'];
      $tnota1= $nota1*0.10;
      $tnota2= $nota2*0.30;
      $tnota3= $nota3*0.20;
      $tnota4= $nota4*0.40;
      $totalnotas=$tnota1+$tnota2+$tnota3+$tnota4;
      echo"la nota final es de:",$totalnotas;
    }
    ?>
</body>
</html>