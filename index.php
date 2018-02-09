<?php
include_once ("./function/conversion.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>Exercice 2</title>
    <link rel="stylesheet" href="./assets/css/styles.css">

</head>
<body>
<?php
$resultConversion=conversion(1,"USD");
echo $resultConversion;
?>
</body>
</html>
