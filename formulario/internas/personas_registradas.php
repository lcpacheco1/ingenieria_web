<?php
	include("../dll/config.php");
	include("../dll/mysql.php");
	extract($_POST);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de PHP</title>
	<meta	charset="utf8">
	<meta name="author" content="UTPL by lcpacheco1@utpl.edu.e3c">		
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<header>
<h1> CUPA XPTREM 2018 </h1>
<h5>Personas registradas</h5>
</header>

<nav>
	<a href="">Home</a>
	<a href="">Evento</a>
	<a href="">Registro</a>
	<a href="">Contactos</a>
	<a href="">Sistema</a>
</nav>
<main>
<?php

//Ejemplo aprenderaprogramar.com

$query="select * from registros";
$reg=mysql_query($query) or die('error de sql');
$id=0;

echo "<table border=1 name='bd'>";
echo "<tr>";
echo "<td><strong>Id</strong></td>";
echo "<td><strong>Nombre</strong></td>";
echo "<td><strong>Apellido</strong></td>";
echo "<td><strong>Dirección</strong></td>";
echo "<td><strong>Correo</strong></td>";
echo "<td><strong>Cédula</strong></td>";
echo "<td><strong>Telefono</strong></td>";
echo "<td><strong>Fecha de nacimiento</strong></td>";
echo "<td><strong>Tipo de persona</strong></td>";
echo "<td><strong>Curso</strong></td>";
echo "<td><strong>Talleres</strong></td>";
echo "<td><strong>Detalle</strong></td>";
echo "</tr>";

while ($registros=mysql_fetch_array($reg)) {
	echo "<tr>";
	echo "<td>$registros[0]</td>";
	echo "<td>$registros[1]</td>";
	echo "<td>$registros[2]</td>";
	echo "<td>$registros[3]</td>";
	echo "<td>$registros[4]</td>";
	echo "<td>$registros[5]</td>";
	echo "<td>$registros[6]</td>";
	echo "<td>$registros[7]</td>";
	echo "<td>$registros[8]</td>";
	echo "<td>$registros[9]</td>";
	echo "<td>$registros[10]</td>";
	echo "<td><a href='datos.php?id=$registros[0]'>Ver factura</a></td>";
	echo "</tr>";	
}
echo "</table>";

	//echo '<script>alert("Datos Guardados")</script>';
	//echo "<script>location.href='../index.php'</script>";
?>
</main>
	<footer>
		<h6>Derechos Reservados UTPL 2018</h6>
	</footer>
</body>
</html>