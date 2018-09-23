<!DOCTYPE html>
<html lang="en">
<head>
    <title>array multidimencional</title>
</head>
<body>
<?php 
$cars = array(
    ['volvo',22,18],
    ['Bmw',15,13],
    ['land rover',17,15],
    ['land rover',23,15]

);
$total =count($cars);
?>

<?php
echo $cars[0][0].", vendidos: ".$cars[0][1]." , stock: ".$cars[0][2];
echo "<br>";
for($i=0; $i<$total; $i++){
    echo "<p><b>Row Number $i</b></p>";
    for($col=0; $col<3; $col++){
        echo "<li>".$cars[$i][$col]."</li>";
    }
    echo"</ul>";
}
?>
    
</body>
</html>