<?php
class animal{
    
    public $chip,$nombre,$raza,$imagen;
    /**
     * @return the $chip
     */
    public function getChip()
    {
        return $this->chip;
    }

    /**
     * @return the $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return the $especie
     */
    public function getRaza()
    {
        return $this->raza;
    }

    /**
     * @return the $imagen
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    function  __toString(){ 
        return "chip : ".$this->getChip()."   nombre : ".$this->getNombre()."  Especie : ".$this->getRaza()."  imagenes : 
<img src='img/".$this->getImagen()." ' width='100' height='100'/>";
    }
   
    
    
}
?>