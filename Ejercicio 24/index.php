<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Peliculas Cine</title>
</head>
<style>
	#container{
		background-color:navy;
		position: absolute;
	}
</style>
</head>
<body>
<?php
	$peliculas = array( 'Beautiful Creatures' => 'beautiful-creatures.jpg',
						'Cazadores de las Sombras' => 'cazadores-de-las-sombras.jpg',
						'El Atlas de las Nubes' => 'el-atlas-de-las-nubes.jpg',
						'El Juego de Ender' => 'ender-game.jpg',
						'En la Mente del Asessino' => 'en-la-mente-del-asessino.jpg',
						'Elysium' => 'Elysium.jpg',
						'Pacific Rim' => 'pacific-rim.jpg',
						'Soy Leyenda' => 'soy-leyenda.jpg', );
	var_dump($peliculas);
	$pelis3 = array_rand($peliculas, 3);
	var_dump($pelis3);
	echo '<div id="container">';
	foreach ($pelis3 as $key => $value) {
		$url='img/'.$peliculas[$value];
		echo '<div style="float:left; align:center; margin:20px; position:relative">	
			  	<img src="'.$url.'" width="170px" height="250px";>
			<center><b style="color: white">' .$value. '</b></center>
			  </div>';	
	}

?>
</body>
</head>
</html>