
<?php
class FiguraGeometrica {
	
	protected $_color;
	protected $_perimetro;
	protected $_superficie;

	public function GetColor(){
		return $this->_color;
	}

	public function SetColor($color){
		$this->_color = $color;
	}

	function __construct(){
		$this->_color = "AZUL";
	}

	public function ToString()
    {    	
    	return $this->_color + $this->_perimetro + $this->_superficie;        
    }

    abstract public function Dibujar();

    abstract public function CalcularDatos();


}

?>