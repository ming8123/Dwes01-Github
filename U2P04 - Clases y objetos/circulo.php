<html>
<head></head>
<body>
<?php
class circulo{
    
    public $radio;
    public $pi=M_PI;
 
    function __construct($radio){
        $this->radio=$radio;               
    }
    
    function getradio(){
        return $this->radio;
    }
    function setradio($radio){
        $this->radio=$radio;
    }
    function  CalculaArea(){
        
        return $this->pi*pow($this->radio,2);
    }
    function CalculaPerimetro(){
        return $this->radio*2*$this->pi;
    }
        
   
    function  __toString(){
        return "el radio del circulo es ".$this->radio." el area del circulo es ".$this->CalculaArea()."el perimetro del circulo es".$this->CalculaPerimetro();
    }
}


?>
</body>
</html>