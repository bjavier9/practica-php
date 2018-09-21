<!DOCTYPE html>
<html lang="en">
<head>
     <title>Funciones</title>
</head>
<body>
    <?php
    function mensaje(){
        echo "que pasa mi chavaleria";
    }
    mensaje();
    // argumntos de la funciones 
    function dielnombre($nombre){
        echo "tu eres $nombre";
    }
    echo "<br>";
    dielnombre('gurgunsua');
    echo "<br>";
    dielnombre('caradegato');
    echo "<br>";
    dielnombre('luck');

    echo "<br>";
    // funcion con dos argumentos 
    function arg($nombre, $apellido){
        echo "te llamas $nombre y tu apellido es $apellido";

    }
    arg("paco", "gemez");
    echo "<br>";
    arg("ramiro","acernico");
    echo "<br>";
    arg("mariano", "rivera");
    echo "<br>";
    // valor de argumnto predeterminado
    function predeter( $nombre = "juan", $edad = 20){
        echo "su nombre es $nombre y tiene $edad años";

    }
    predeter();
    echo "<br>";
    predeter('pedro', 25);
    echo "<br>";
    predeter('amarillo', 22);

    // devolviendo valores 
    function devuelve($x, $Y){
        $z = $x + $Y;
        return $z; 
    }

    echo "<br>";
    echo "5+4 = ".devuelve(5,4)."<br>";
    echo "7+2 = ".devuelve(7,2)."<br>";
    echo "6+3 = ".devuelve(6,3)."<br>";
    
    ?>
</body>
</html>