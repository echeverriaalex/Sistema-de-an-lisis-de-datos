<?php
    namespace PDO;

    use Models\Persona;
    use PDOException;

    class PersonaPDO{

        private $connection;
        private $tableName = "persona";

        public function GetAll(){
            try{
                $personaList = array();
                $query = "select * from $this->tableName;";
                $this->connection = Connection::GetInstance();
                $personaResult = $this->connection->Execute($query);

                foreach($personaResult as $row){

                    $persona = new Persona($row['id'], $row['nombre']);
                    array_push($personaList, $persona);
                }
                return $personaList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Add($id, $nombre){

            try{
                $query = "insert into $this->tableName (id, nombre) values (:id, :nombre);";
                $this->connection = Connection::GetInstance();
                $parameters['id'] = $id;
                $parameters['nombre'] = $nombre;
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Edit($id, $newId, $nombre){
            try{
                $query = "update $this->tableName set id = :newId, nombre = :nombre where(id = :id);";
                $parameters['newId'] = $newId;
                $parameters['nombre'] = $nombre;
                $parameters['id'] = $id;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Delete($id){
            try {
                $query = "delete from $this->tableName where (id = :id);";
                $parameters['id'] = $id;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            } catch (PDOException $ex) {
                throw $ex;
            }
        }
    }
?>