<?php 
    namespace Models;

    class Residencia{

        private $id_r;
        private $dir_calle;
        private $dir_numero;
        private $dir_piso_depto;
        
        public function __construct($id_r, $dir_calle = null, $dir_numero = null, $dir_piso_depto = null){
            $this->setId($id_r);
            $this->setCalle($dir_calle);
            $this->setNumero($dir_numero);
            $this->setDepartamento($dir_piso_depto);
        }

        public function setId($id){$this->id_r = $id;}
        public function getId(){return $this->id_r;}

        public function setCalle($calle){$this->dir_calle = $calle;}
        public function getCalle(){return $this->dir_calle;}

        public function setNumero($numero){$this->dir_numero = $numero;}
        public function getNumero(){return $this->dir_numero;}

        public function setDepartamento($departamento){$this->dir_piso_depto = $departamento;}
        public function getDepartamento(){return $this->dir_piso_depto;}
    }
?>