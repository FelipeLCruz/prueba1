<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../algoritmos/estilos.css">
    <title>Poliza de Seguro</title>
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
<p>3. Una compañía de seguros para autos ofrece dos tipos de póliza: cobertura amplia
GFPI-F-135 V01
y daños a terceros (B). Para el plan A, la cuota base es de $1,200.00, y para el B, de
$950.00. A ambos planes se les carga 10% del costo si la persona que conduce
(A) tiene por hábito beber alcohol, 5% si utiliza lentes, 5% si padece alguna
enfermedad
–como de- ciencia cardiaca o diabetes–, y si tiene más de 40 años, se le carga
20%, de lo contrario sólo 10%. Todos estos cargos se realizan sobre el costo
base. Realice un programa para determinar cuánto le cuesta a una persona
contratar una póliza</p>
    <h1>Poliza de Seguro</h1>
    <form method="POST" action="">
        <label for="">Seleccione el tipo de póliza</label>
        <select name="poliza" required>
            <option value="">-----</option>
            <option value="1">Cobertura amplia</option>
            <option value="2">Daños a terceros</option>
        </select><br><br>

        <label for="">¿Tiene hábito por el alcohol?</label>
        <input type="checkbox" name="alcohol"><br><br>

        <label for="">¿Utiliza lentes?</label>
        <input type="checkbox" name="lentes"><br><br>

        <label for="">¿Padece alguna enfermedad como deficiencia cardíaca o diabetes?</label>
        <input type="checkbox" name="enfermedad"><br><br>

        <label for="">¿Tiene más de cuarenta años?</label>
        <input type="number" name="edad" required><br><br>

        <input type="submit" value="Calcular" name="submit"><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tipoPoliza = $_POST['poliza'];
        $edad = $_POST['edad'];

        if ($tipoPoliza==1) {
            $valorPoliza=1200000;
        } elseif ($tipoPoliza==2) {
            $valorPoliza=950000;
        }
        $total=$valorPoliza;
        if (isset($_POST['alcohol'])) {
            $total=$total+($valorPoliza*0.1);
        }
        if (isset($_POST['lentes'])) {
            $total=$total+($valorPoliza*0.05);
        }
        if (isset($_POST['enfermedad'])) {
            $total=$total+($valorPoliza*0.05);
        }
        if ($edad>=40) {
            $total=$total+($valorPoliza*0.2);
        } else {
            $total=$total+($valorPoliza*0.1);
        }
        echo "El valor de la póliza es de: $$total";
    }
    ?>
</body>
</html>