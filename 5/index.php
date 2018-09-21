<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arrays</title>
</head>
<body>
<?php
    $cars = ['bmw', 'toyota', 'nissan'];
    echo "I like ". $cars[0].", ".$cars[1]." and ".$cars[2].".";
    echo "<br>";
    echo count($cars);

    //bucle atravez de una matriz
    $car = array('volvo','lotus','tesla');
    $total = count($car);
    sort($car);//ordena los valores acendentes
    echo "<br>";
    for($i = 0; $i<$total; $i++){
        echo $car[$i];
        echo "<br>";
    }

    //arreglo asociativo
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "peter is ".$age['Peter']." years old.";
    foreach($age as $x => $x_value){
        echo "Key= ".$x.",Value= ".$x_value;
        echo "<br>";
    }
 $numbers = [1,2,3,6,23,21,4,7,21];
 sort($numbers);
 var_dump($numbers);
 rsort($numbers); //los ordena de forma descendentes
 echo "<br>";
 var_dump($numbers);
 //asort y ksort tienen la misma funcion que sort y rsort solo que estas se usan para matrices asociativas
 echo "<br>";
 ksort($age);
 var_dump($age);
 asort($age);
 echo "<br>";
 var_dump($age);

// ordenando segun el valor arsort descendente y krsort para los values dde las matrices asocitivas
echo "<br>";
arsort($age);
var_dump($age);
krsort($age);
echo"<br>";
var_dump($age)

?>
</body>
</html>