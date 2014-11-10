<?php
class Cabecera{
	private $width = '100%';
	private $background= 'A5CE1F';
	private $textAl= 'center';
	private $colorFont = 'red';
	private $tittle;
	function __construct($tittle){
		$this->width;
		$this->background;
		$this->colorFont;
		$this->tittle=$tittle;
	}
	function mostrar(){
	echo '
	<div id="cabecera" 
		style="width:'.$this->width .';
		text-align: '.$this->textAl .'; 
		background-color: '.$this->background .'; 
		color: '.$this->colorFont .';
		font-size: 3em;">'.$this->tittle .'</div>';

	}
}
?>