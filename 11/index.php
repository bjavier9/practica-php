<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>manejo de fechas</title>
</head>
<body>

<?php
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("Y.m.d")."<br>";
echo "Today is ".date("Y-m-d")."<br>";
echo "Today is ".date("l")."<br>";
echo "Today is ".date("Y")."<br>";
echo "The time is ".date("h:i:sa")."<br>";
date_default_timezone_set("America/Panama");
echo "The time is ".date("h:i:sa")."<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa",$d)."<br>";
$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa",$d)."<br>";
$d=strtotime("+3 months");
echo date("Y-m-d h:i:sa",$d)."<br>";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}


$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";

?>
</body>
</html>