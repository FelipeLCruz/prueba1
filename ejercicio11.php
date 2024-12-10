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
<p>11. Tres socios invierten cantidades diferentes de dinero en un negocio, de termine a
que porcentaje corresponde la inversión de cada uno.</p>
    <form action="" method="post">
      <label for="">ingrese la cantidad de dinero del primer socio</label><br>
      <input type="text" name="socio1"></label><br>
      <label for="">ingrese la cantidad de dinero del primer socio</label><br>
      <input type="text" name="socio2"></label><br>
      <label for="">ingrese la cantidad de dinero del primer socio</label><br>
      <input type="text" name="socio3"></label><br><br>
      <input type="submit" value="calcular los porcentajes" name="submit"><br><br>
    </form>
    <?php
    if(isset($_POST['submit'])){
      $socio1=$_POST['socio1'];
      $socio2=$_POST['socio2'];
      $socio3=$_POST['socio3'];
      $totalinver=$socio1+$socio2+$socio3;
      $tsocio1= $socio1*100/$totalinver;
      $tsocio2= $socio2*100/$totalinver;
      $tsocio3= $socio3*100/$totalinver;
      $tsocio1=number_format($tsocio1,2);
      $tsocio2=number_format($tsocio2,2);
      $tsocio3=number_format($tsocio3,2);
      echo "la inversion del socio 1 fue:".$tsocio1."%<br>";
      echo "la inversion del socio 2 fue:".$tsocio2."%<br>";
      echo "la inversion del socio 3 fue:".$tsocio3."%";

    }
    ?>
</body>
</html>