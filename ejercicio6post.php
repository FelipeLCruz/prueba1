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
<p>6. El presidente de la república ha decidido estimular a todos los estudiantes de una
universidad mediante la asignación de becas mensuales, para esto se tomarán
en consideración los siguientes criterios:
a. Para alumnos mayores de 18 años con promedio mayor o igual a 9, la beca
será de $2´000.000; con promedio mayor o igual a 7.5, de $1’000.000; para
los promedios menores de 7.5 pero mayores o iguales a 6.0, de $500.000;
a los demás se les enviará una carta de invitación incitándolos a que
estudien más en el próximo ciclo escolar.
b. A los alumnos de 18 años o menores de esta edad, con promedios
mayores o iguales a 9, se les dará $300000; con promedios menores a 9
pero mayores
o iguales a 8, $200000; para los alumnos con promedios menores a 8 pero
mayores o iguales a 6, se les dará $100000, y a los alumnos que tengan
promedios menores a 6 se les enviará carta de invitación</p>
    <form method="post">
    <h1>Entrega de Becas del gobierno dependiendo su edad y su promedio</h1>
    <label>Ingrese su promedio de 1 a 10</label>
    <input type="text" name="promedio"><br><br>
    <label>Por favor digite su edad:</label>
    <input type="text" name="edad"><br><br>
    <input type="submit" value="calcular" name="submit"><br><br>
    </form>
    <?php
     if (isset($_POST['submit'])){
        $promedio=$_POST['promedio'];
        $edad=$_POST['edad'];
        if($edad>=18&&$promedio>=9&&$promedio<=10){
        echo"<h2>Su beca es de 2000000</h2>";
        } elseif($edad>=18 &&$promedio>=7.5&&$promedio<=9){
            echo"<h2>Su beca es de 1000000</h2>";
        } elseif($edad>=18 && $promedio>=6 && $promedio<=7.5){
             echo"<h2Su beca es de 500000</h2>";
        }
        if ($edad<18&&$promedio>=9&&$promedio<=10){
            echo"<h2>Su beca es de 300000 por se menor de edad</h2>";
        } elseif($edad<18&&$promedio>=8&&$promedio<=9){
            echo"<h2>Su beca es de 200000 por se menor de edad</h2";
        }elseif($edad<18 &&$promedio>=6&&$promedio<=8){
            echo"<h2>Su beca es de 100000 por se menor de edad</h2";
        } elseif($promedio<=6){
            echo"<h2>No le alcanza para la beca estudie mas deje de ser vago</h2>";
        }
     }
    
    ?>
</body>
</html>