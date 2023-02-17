<?php 
    namespace Models;

    class Localidad{

        private $id_l;
        private $c_postal;
        private $localidad;
        private $pcia;

        public function __construct($id_l, $c_postal = null, $localidad = null, $pcia = null){
            $this->setId($id_l);
            $this->setCodigoPostal($c_postal);
            $this->setLocalidad($localidad);
            $this->setProvincia($pcia);
        }

        public function setId($id){$this->id_l = $id;}
        public function getId(){return $this->id_l;}

        public function setCodigoPostal($codigoPostal){$this->c_postal = $codigoPostal;}
        public function getCodigoPostal(){return $this->c_postal;}

        public function setLocalidad($localidad){$this->localidad = $localidad;}
        public function getLocalidad(){return $this->localidad;}

        public function setProvincia($provincia){$this->pcia = $provincia;}
        public function getProvincia(){return $this->pcia;}
    }
?>