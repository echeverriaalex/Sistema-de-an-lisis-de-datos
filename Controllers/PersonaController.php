<?php
    namespace Controllers;
    use PDO\PersonaPDO;

    class PersonaController{

        private $personaPDO;

        public function __construct(){
            $this->personaPDO = new PersonaPDO();
        }

        public function ShowAddView(){

        }

        public function ShowListView(){
            $personaList = $this->personaPDO->GetAll();
            require_once(VIEWS_PATH. "persona-list.php");
        }

        public function ShowEditView($id, $nombre){
            require_once(VIEWS_PATH. "persona-edit.php");
        }

        public function Add($id, $nombre){
            $this->personaPDO->Add($id, $nombre);
            //echo "<script> alert('Persona registrada exitosamente'); </script>";
        }

        public function Edit($id, $newId, $nombre){
            $this->personaPDO->Edit($id, $newId, $nombre);
            $this->ShowListView();
        }

        public function GetAll(){
            return $this->personaPDO->GetAll();
        }
    }
?>