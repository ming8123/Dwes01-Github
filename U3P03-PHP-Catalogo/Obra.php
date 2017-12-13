<?php
class Obra{
    public $ID,$ID_autor,$Genero,$Nombre_obra,$Imagen;
  

 

   
    public function getImagen()
    {
        return $this->Imagen;
    }

    public function getID()
    {
        return $this->ID;
    }

   
    public function getID_autor()
    {
        return $this->ID_autor;
    }

  
    public function getGenero()
    {
        return $this->Genero;
    }

    
    public function getNombre_obra()
    {
        return $this->Nombre_obra;
    }

       
}


?>
