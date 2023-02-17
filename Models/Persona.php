<?php 
    namespace Models;

    class Persona{

        private $id;
        private $nombre;

        public function __construct($id = null, $nombre = null){
            $this->setId($id);
            $this->setNombre($nombre);
        }

        public function setId($id){$this->id = $id;}
        public function getId(){return $this->id;}

        public function setNombre($nombre){$this->nombre = $nombre;}
        public function getNombre(){return $this->nombre;}
    }
?>