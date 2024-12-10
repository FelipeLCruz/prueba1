<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../algoritmos/estilos.css">
    <title>Vacuna</title>
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
<p>4. La secretaria de salud requiere un programa que permita determinar qué tipo de
vacuna (A, B o C) debe aplicar a una persona, considerando que, si es mayor de
70 años, sin importar el sexo, se le aplica la tipo C; si tiene entre 16 y 69 años, y
es mujer, se le aplica la B, y si es hombre, la A; si es menor de 16 años, se le
aplica la tipo A, sin importar el género.</p>
    <form method="post">
    <h1>Determinar qué tipo de vacuna debe aplicar a una persona si es (A, B o C) dependiendo la edad</h1>
    <label>Por favor, digite su Edad:</label>
    <input type="text" name="edad"><br><br>
    <label>Seleccione su Sexo:</label>
    <select name="sexo" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
    </select><br><br>
    <input type="submit" value="Enviar" name="vacuna"><br><br>
    </form>
    <?php
    if(isset($_POST['vacuna'])){
        $edad=$_POST['edad'];
        $sexo=$_POST['sexo'];
        if($edad>=70){
            echo"<h2>Se le tiene que aplicar la vacuna C</h2>";
        }elseif ($edad>16&&$edad<=69){
            if ($sexo=='femenino'){
                echo"<h2>Se le aplicará la vacuna B</h2>";
            } elseif($sexo=='masculino'){
                echo"<h2>Se le aplicará la vacuna A</h2>";
            }
        }elseif($edad <= 16){
            echo"<h2>Se le aplicará la vacuna A</h2>";
        }
    }
    ?>
</body>
</html>