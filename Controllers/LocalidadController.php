<?php
    namespace Controllers;

    use PDO\LocalidadPDO;

    class LocalidadController{

        private $localidadPDO;

        public function __construct(){
            $this->localidadPDO = new LocalidadPDO();
        }

        public function ShowEditView($id_l, $c_postal, $localidad, $pcia){
            require_once(VIEWS_PATH."localidad-edit.php");
        }

        public function ShowListView(){
            $localidadList = $this->localidadPDO->GetAll();
            require_once(VIEWS_PATH."localidad-list.php");
        }

        public function Add($id_l, $c_postal, $localidad, $pcia){

            $this->localidadPDO->Add($id_l, $c_postal, $localidad, $pcia);
        }

        public function Edit($id, $newId_l, $c_postal, $localidad, $pcia){
            $this->localidadPDO->Edit($id, $newId_l, $c_postal, $localidad, $pcia);
            $this->ShowListView();
        }

        public function GetAll(){

            return $this->localidadPDO->GetAll();
        }

    }
?>