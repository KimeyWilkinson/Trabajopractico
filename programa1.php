<?php

$M1 = $_GET['M1'];
$M2 = $_GET['M2'];
$M3 = $_GET['M3'];
$M4 = $_GET['M4'];

($N1 = 1);
($N2 = 0.5);
($N3 = 0.25);
($N4 = 0.10);

$SUMA = ($M1*$N1) + ($M2*$N2) + ($M3*$N3) + ($M4*$N4);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width">
	<title></title>
</head>
<body>
	<h1>Resultado</h1>


	<?php echo "La suma de las monedas da como resultado" $SUMA; ?>
</body>
</html>  