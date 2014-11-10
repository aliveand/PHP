<html>
<head>
	<title>Comunidades Autonomas</title>
<body>
<?php

	$comunidades = array(
		'Galicia' =>  array('La coruña',
					       'Lugo',
						   'Pontevedra',
						   'Ourense'),
		'Asturias'=>  array('Asturias'),
		'cantabria'=> array('Cantabria'),
		'Pais Vasco'=>array('Vizcaya',
							'Guipuzcoa',
							'alava'),
		'Navarra' =>  array('Navarra'),
		'Aragon'  =>  array('Huesca',
						    'Zaragoza',
						    'Teruel'),
		'Cataluna' => array('Lerida',
			 			    'Gerona',
			 			    'Barcelona',
			 			    'Tarragona'),
		'Cas-leon' => array('Leon',
							'Palencia',
							'Brugos',
							'Zamora',
							'Valladolid',
							'Segovia',
							'Salamanca',
							'Avila',
							'Soria'),
		'La Rioja' => array('La rioja'),
		'Madrid'   => array('Madrid'),
		'Extremadu'=> array('Caceres',
							'Badajoz'),
		'cas-mancha'=>array('Guadalajara',
							'Toledo',
							'Cuenca',
							'Ciudad Real',
							'Albacete'),
		'ComuValenc'=>array('Castellon',
							'Valencia',
							'Alicante'),
		'IsBaleares'=>array('Isla Baleares'),
		'Andalucia'=> array('Huelva',
							'Sevilla',
							'Cordoba',
							'Jaen',
							'Cadiz',
							'Malaga',
							'Granada',
							'Alemria'),
		'Murcia'  =>  array('Murcia'),
		'IsCanaria'=> array('Las Palmas de Gran Canarias',
							'Santa Cruz de Tenerife'));
if (empty($_POST)){
	echo '		Elije la cominudad';
	echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
    echo    '<select name="ccaa">';

    	foreach ($comunidades as $key => $value) {
    		echo '<option value="'.$key.'">'.$key.'</option>';
    	}

    echo'</select>
	<input type="submit" value="Enviar"><br> 
	</form>'; 	
} else {
	$option = $_POST['ccaa'];
	echo $option;
		echo '<select>';
		switch ($option) {
			case 'Galicia':
				for ($i=0; $i <count($comunidades['Galicia']); $i++) { 
					echo '<option>'.$comunidades['Galicia'][$i].'</option>';
				}
				break;
			case 'Asturias':
				for ($i=0; $i <count($comunidades['Asturias']); $i++) { 
					echo $comunidades['Asturias'][$i];
				}
				break;
			case 'cantabria':
				for ($i=0; $i <count($comunidades['cantabria']); $i++) { 
					echo $comunidades['cantabria'][$i];
				}
				break;
			case 'Pais Vasco':
				for ($i=0; $i <count($comunidades['Pais Vasco']); $i++) { 
					echo $comunidades['Pais Vasco'][$i];
				}
				break;
			case 'Navarra':
				for ($i=0; $i <count($comunidades['Navarra']); $i++) { 
					echo $comunidades['Navarra'][$i];
				}
				break;
			case 'Aragon':
				for ($i=0; $i <count($comunidades['Aragon']); $i++) { 
					echo $comunidades['Aragon'][$i];
				}
				break;
			case 'Cataluna':
				for ($i=0; $i <count($comunidades['Cataluna']); $i++) { 
					echo $comunidades['Cataluna'][$i];
				}
				break;
			case 'Cas-leon':
				for ($i=0; $i <count($comunidades['Cas-leon']); $i++) { 
					echo $comunidades['Cas-leon'][$i];
				}
				break;
			case 'La Rioja':
				for ($i=0; $i <count($comunidades['La Rioja']); $i++) { 
					echo $comunidades['La Rioja'][$i];
				}
				break;
			case 'Madrid':
				for ($i=0; $i <count($comunidades['Madrid']); $i++) { 
					echo $comunidades['Madrid'][$i];
				}
				break;
			case 'Extremadu':
				for ($i=0; $i <count($comunidades['Extremadu']); $i++) { 
					echo $comunidades['Extremadu'][$i];
				}
				break;																																							
			case 'cas-mancha':
				for ($i=0; $i <count($comunidades['cas-mancha']); $i++) { 
					echo $comunidades['cas-mancha'][$i];
				}
				break;
			case 'ComuValenc':
				for ($i=0; $i <count($comunidades['ComuValenc']); $i++) { 
					echo $comunidades['ComuValenc'][$i];
				}
				break;
			case 'IsBaleares':
				for ($i=0; $i <count($comunidades['IsBaleares']); $i++) { 
					echo $comunidades['IsBaleares'][$i];
				}
				break;	
			case 'Andalucia':
				for ($i=0; $i <count($comunidades['Andalucia']); $i++) { 
					echo $comunidades['Andalucia'][$i];
				}
				break;	
			case 'Murcia':
				for ($i=0; $i <count($comunidades['Murcia']); $i++) { 
					echo $comunidades['Murcia'][$i];
				}
				break;	
			case 'IsCanaria':
				for ($i=0; $i <count($comunidades['IsCanaria']); $i++) { 
					echo $comunidades['IsCanaria'][$i];
				}
				break;	
			default:
				# code...
				break;
		}
		echo '</select>';
}

?>
</body>
</head>
</html>