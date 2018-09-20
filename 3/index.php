<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    $t = date("H");
    if ($t < "10") {
        echo "good morning";
    } elseif ($t < "20") {
        echo "que tengas un buen dia! " . $t;
    } else {
        echo "que  tengas buenas noches " . $t;
    }
    echo "<br>";
    $color = "red";

    switch ($color) {
        case "red":
            echo "tu color favorito es rojo";
            break;
        case "blue":
            echo "tu color favorito es el azul";
            break;
        case "green":
            echo "tu color favorito es el verde";
            break;
        default:
            echo "no esta en esta lista tu color";


    }
    echo "<br>";
    $z = 1;
    while($z <=5){
        echo "the number is : $z <br>";
        $z++;
    } 
$y = 1;
echo "<br>";
do {
    echo "the number is: $y <br>";
    $y++;
}while($y <= 5);
// ciclo do while
$k = 6; 
do {
echo "the number is $k";
$k++;
}while ($k <= 5);

echo "<br>";
// ciclo for each 
$colors = array("red", "green", "blue", "yellow");

foreach($colors as $value){
    echo "$value<br>";
}

    ?>
</body>
</html>