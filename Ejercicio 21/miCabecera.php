<html>
<head>
	<title></title>
<body>
<?php
include('cabecera.php');
$p1 = new Cabecera("Cabecera creada con exito 1");
$prueba2 = new Cabecera('Mi Cabecera');

echo $p1->mostrar().'</br>';
echo $prueba2->mostrar();
?>
</body>
</head>
</html>