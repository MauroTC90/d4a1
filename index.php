
<?php
$enlace = mysql_connect('mysql', 'root', 'TM1q2w3e.');
if (!$enlace) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connecteros soccsessfoly';
mysql_close($enlace);
echo "<br>EDSI";
?>

