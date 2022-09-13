<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$n = 3;
		if ($n > 0) {
			echo "$n es un numero positivo";
		}
	?>
	<br>
	<hr>
	<?php
		$n = 5;
		if ($n > 1) {
			echo "$n es mayor que 1";
		} else {
			echo "$n es menor que 10";
		}
	?>
	<br>
	<hr>
	<?php
		$n = 1;
		if ($n > 10 ) {
			echo "$n es mayor que 10";
		} else {
			echo "$n es menor que 2";
		}
	?>
	<br>
	<hr>
	<?php
		$numero1 = 25;
		$numero2 = 25;
		if ($numero1 > $numero2) {
			echo " si $numero1 es mayor que $numero2 la suma de las dos variables es $numero1 + $numero2 y la resta es $numero1 - $numero2";
		}elseif ($numero1 < $numero2) {
			echo "si $numero1 es menor que $numero2 la multiplicacion es $numero1 * $numero2 y la divicion es $numero1 / $numero2";
		}else {
			echo "los numeros ingresados son iguales";
		}
	?>
</body>
</html>