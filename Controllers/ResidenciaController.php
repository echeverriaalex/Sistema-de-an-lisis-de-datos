<?php
    namespace Controllers;

    use PDO\ResidenciaPDO;

    class ResidenciaController{

        private $residenciaPDO;

        public function __construct(){
            $this->residenciaPDO = new ResidenciaPDO();
        }

        public function ShowEditView($id_r,$dir_calle, $dir_numero, $dir_piso_depto){
            require_once(VIEWS_PATH."residencia-edit.php");
        }
        
        public function ShowListView(){

            $residenciaList = $this->residenciaPDO->GetAll();
            require_once(VIEWS_PATH."residencia-list.php");
        }

        public function Add($id_r,$dir_calle, $dir_numero, $dir_piso_depto){

            $this->residenciaPDO->Add($id_r,$dir_calle, $dir_numero, $dir_piso_depto);
            //$this->ShowAddView();
        }

        public function Edit($id, $newId_r, $dir_calle, $dir_numero, $dir_piso_depto){

            $this->residenciaPDO->Edit($id, $newId_r, $dir_calle, $dir_numero, $dir_piso_depto);
            $this->ShowListView();
        }

        public function Delete($id_r){
            $this->residenciaPDO->Delete($id_r);
            $this->ShowListView();
        }

        public function GetAll(){

            return $this->residenciaPDO->GetAll();
        }
    }
?>