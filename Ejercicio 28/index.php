<html>
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
	<title>Generador de arbol</title>
<style>

</style>
</head>
<body>
<?php
	echo '<table border=2><caption>Tabla codigo ASCII</caption><tr>';
	echo '<tr><td></td>';
		for ($j=1; $j <= 17; $j++) { 
			echo '<td>' . $j . '</td>';
		}
	echo '</tr>';
		for ($i=0; $i < 271; $i++) { 
			echo '<td>'.chr($i).'</td>';
			if ($i%18==0 && $i!=0) {
				echo '</tr><tr>';
			} 
		}
	echo '</tr></table>';
?> 
</body>
</head>                                                                                                                                                      
</html>