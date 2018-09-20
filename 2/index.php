<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 

    //constantes php define(name, value, case-insencitive)
    define('yeyo','watuchehche',true);//son globales
    echo YEYO;
    function mytest($l){
        echo yeyo."$l";
    }
    echo "<br>";
    mytest(' perro');
    echo "<br>";
    $x = 'hola que hace';
    echo "$x ".strlen($x)." caracteres";//numero de caracteres
    echo "<br>";
    echo "$x ".str_word_count($x)." palabras";//contar palabras
    $n = '53345';
    echo "<br>";
    echo  strrev($n);  //invertir un string 
    // buscar texto dentro de una cadena 
    echo "<br>";
    echo strpos($x, 'que');
    echo "<br>";
    //remplazar una cadena dentro de otra
    echo str_replace('que','cuando',$x)
    
    ?>
</body>
</html>