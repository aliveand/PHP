<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
<style>
	
</style>
</head>

<body>
<?php
	function form(){
	echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="POST">
			<h3>Altura de las ramas:</h3>
			<p><input type="number" name="ramas" min="0"></p>
			<h3>Longitud del tronco:</h3>
			<p><input type="number" name="tronco" min="0"></p>
			<input type="submit" value="Enviar">';
	}

	function ramas($ramas){
		echo '<center>';
			for ($i=0; $i < $ramas+1; $i++) { 
				echo str_pad('', $i,'*').'<br>';
			}
		echo '</center>';		
	} 

	function tronco($tronco){
		echo '<center>';
		for ($i=0; $i < $tronco; $i++) { 
			echo str_pad('', 2,'*').'<br>';
		}
		echo '</center>';		
	} 
	if (empty($_POST['ramas']) && empty($_POST['tronco'])){
		form();
	} else {
		ramas($_POST['ramas']);
		tronco($_POST['tronco']);
	}
	
?>  
</body>
</head>
</html>