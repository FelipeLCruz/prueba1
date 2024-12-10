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
                <li><a href="ejercicio6.php">Ejercicio7</a></li>
                <li><a href="ejercicio7.php">Ejercicio8</a></li>
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
    <form method="post">
        <label for="">digite la primer nota:</label>
        <input type="text" name=nota1><br><br>
        <label for="">digite la segunda nota:</label>
        <input type="text" name=nota2><br><br>
        <label for="">digite la tercera nota:</label>
        <input type="text" name=nota3><br><br>
        <label for="">digite la cuarta nota:</label>
        <input type="text" name=nota4><br><br>
        <label for="">digite la quinta nota:</label>
        <input type="text" name=nota5><br><br>
        <label for="">digite la sexta nota:</label>
        <input type="text" name=nota6><br><br>
        <input type="submit" value="Promediar" name="submit"><br>
   <?php
    $sumaaprobado=0;
    $sumanoaprobado=0;
    $cont_aprobado=0;
    $contnoaprobado=0;
   if(isset($_POST['submit'])){

    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];
    $nota4=$_POST['nota4'];
    $nota5=$_POST['nota5'];
    $nota6=$_POST['nota6'];
    if ($nota1>=3){
        $sumaaprobado=$sumaaprobado+$nota1;
        $cont_aprobado=$cont_aprobado+1;
    }else{
        $sumanoaprobado=$sumanoaprobado+$nota1;
        $contnoaprobado=$contnoaprobado+1;
    };
    if ($nota2>=3){
        $sumaaprobado=$sumaaprobado+$nota2;
        $cont_aprobado=$cont_aprobado+1;
    }else{
        $sumanoaprobado=$sumanoaprobado+$nota2;
        $contnoaprobado=$contnoaprobado+1;
    }
    if ($nota3>=3){
        $sumaaprobado=$sumaaprobado+$nota3;
        $cont_aprobado=$cont_aprobado+1;
    }else{
        $sumanoaprobado=$sumanoaprobado+$nota3;
        $contnoaprobado=$contnoaprobado+1;
    }
    if ($nota4>=3){
        $sumaaprobado=$sumaaprobado+$nota4;
        $cont_aprobado=$cont_aprobado+1;
    }else{
        $sumanoaprobado=$sumanoaprobado+$nota4;
        $contnoaprobado=$contnoaprobado+1;
    }
    if ($nota5>=3){
        $sumaaprobado=$sumaaprobado+$nota5;
        $cont_aprobado=$cont_aprobado+1;
    }else{
        $sumanoaprobado=$sumanoaprobado+$nota5;
        $contnoaprobado=$contnoaprobado+1;
    }
    if ($nota6>=3){
        $sumaaprobado=$sumaaprobado+$nota6;
        $cont_aprobado=$cont_aprobado+1;
    }else{
        $sumanoaprobado=$sumanoaprobado+$nota6;
        $contnoaprobado=$contnoaprobado+1;
    }
    if($cont_aprobado>0){
        $promedio_aprobado=$sumaaprobado/$cont_aprobado;
        echo"el promedio de las notas aprobadas es: $promedio_aprobado<br>";
    }else{
        echo"no hay notas aprovadas <br>";
    }
    if($contnoaprobado>0){
        $promedio_no_aprobado=$sumanoaprobado/$contnoaprobado;
        echo"el promedio de las notas no aprobadas es: $promedio_no_aprobado<br>";
    }else{
        echo"no hay notas aprovadas";
    }
   }
   ?>
    </form>
</body>
</html>