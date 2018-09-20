<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1><?='hola'?></h1>

<?php  
$x=5/*+15*/ +5;
echo $x;

$color = 'red';
$text = 'gato';
echo "<h1>My car is ".$color." </h1><br>";
echo "<h3>Quieres comer hoy $text</h3>";

$y=3;
echo $x + $y;
function mytest(int $x){
    echo "<p> esto es mi prueba de variables $x<p>";
}
mytest(3);
echo "<p>Variable x outside function is: $x</p>";
function gglobal(){
    global $x;
    $x = $x +10;
}
gglobal();
echo $x;
function mytees(){
    static $x = 0;
    echo $x;
    $x++;
}
echo "<br>";
mytees();
echo"<br>";
mytees();
echo "<br>";
mytees();
// echo es mas rapido que print ya que retorna argumentos mientras que print retorna un numero 

$v = 'tengo hambre';
$v1 = "comete un perro chino";
$n = 5;
print "</h1>".$v."</h1>";
print "<p>$v1</p>";
print $n+6;
?>

<h1>Tipos de datos</h1>
<?php 
// striing
$nombre = "hola que tal";
echo $nombre;
echo   "<br>";
var_dump($nombre); //var_dumb sirve para saber el tipo de variable


// tipo entero
$num=10;
echo   "<br>";
var_dump($num);

//flotante
$num1 = 10.365;
var_dump($num1);
// booleano
$booll=true;
$boll1=false;
echo   "<br>";
var_dump($booll);
var_dump($boll1);
$cars = array('volvo', 'mercedes', 'toyota');
var_dump($cars);

//objeto 
class car{
    function car(){
        $this -> model = 'vw';
    }
}
$herbie = new car();
echo   "<br>";
echo $herbie -> model;
// null
$rb = 'hola';
$rb = null;
var_dump($rb)
?>
</body>
</html>