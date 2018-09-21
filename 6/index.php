<!DOCTYPE html>
<html lang="en">
<head>  
    <title>variables superglobales</title>
</head>
<body>
<?php 
    $x= 5;
    $y= 6;
    function suma(){
       $GLOBALS['z'] = $GLOBALS['x']+$GLOBALS['y'];
    }
suma();
echo $z;
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


?>
    
</body>
</html>