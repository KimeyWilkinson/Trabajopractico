<?php
$M10 = $_GET['M10'];
$M5 = $_GET['M5'];
$M2 = $_GET['M2'];
$M1 = $_GET['M1'];
$M050 = $_GET['M050'];
$M025 = $_GET['M025'];
$M010 = $_GET['M010'];



$SUMA = ($M10 * 10) + ($M5 * 5) + ($M2 * 2) + ($M1* 1) + ($M050* 0.50) + ($M025* 0.25) + ($M010* 0.10);

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


	<?php echo "La suma de las monedas da como resultado" . $SUMA; ?>
</body>
</html>  