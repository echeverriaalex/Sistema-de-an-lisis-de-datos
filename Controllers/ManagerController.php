<?php
    namespace Controllers;

    class ManagerController{

        private $ResidenciaController;
        private $PersonaController;
        private $LocalidadController;

        public function __construct(){

            $this->ResidenciaController = new ResidenciaController();
            $this->PersonaController = new PersonaController();
            $this->LocalidadController = new LocalidadController();
        }

        public function ShowAddView(){
            require_once(VIEWS_PATH."add.php");
        }

        public function ShowListView(){

            $personaList = $this->PersonaController->GetAll();
            $residenciaList = $this->ResidenciaController->GetAll();
            $localidadList = $this->LocalidadController->GetAll();
        }

        public function ShowListViewResidencia(){
            $residenciaList = $this->ResidenciaController->GetAll();
            require_once(VIEWS_PATH."residencia-list.php");
        }

        public function ShowListViewPersona(){
            $personaList = $this->PersonaController->GetAll();
            require_once(VIEWS_PATH."persona-list.php");
        }

        public function ShowListViewLocalidad(){
            $localidadList = $this->LocalidadController->GetAll();
            require_once(VIEWS_PATH."localidad-list.php");
        }

        public function Add($id_p, $nombre, $id_r, $dir_calle, $dir_numero, $dir_piso_depto, $id_l, $c_postal, $localidad, $pcia){
            $this->PersonaController->Add($id_p, $nombre);
            $this->ResidenciaController->Add($id_r, $dir_calle, $dir_numero, $dir_piso_depto);
            $this->LocalidadController->Add($id_l, $c_postal, $localidad, $pcia);
            echo "<script> alert('Datos registrados con exito.'); </script>";
            $this->ShowAddView();
        }
    }
?>