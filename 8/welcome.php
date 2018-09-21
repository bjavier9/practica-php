<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    Welcome <?php echo $_POST["name"]; ?> <br>
    Your Email address is: <?php echo $_POST["email"]; ?>
    Welcome <?php echo $_GET["name"]; ?> <br>
    Your Email address is: <?php echo $_GET["email"]; ?>
</body>
</html>