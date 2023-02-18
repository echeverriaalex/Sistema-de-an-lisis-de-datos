<?php
    namespace PDO;

    use Models\Localidad;
    use PDOException;

    class LocalidadPDO{
        
        private $connection;
        private $tableName = "localidad";

        public function GetAll(){
            try{
                $localidadList = array();
                $query = "select * from $this->tableName;";
                $this->connection = Connection::GetInstance();
                $localidadResult = $this->connection->Execute($query);

                foreach($localidadResult as $row){
                    $localidad = new Localidad($row['id_l'], $row['c_postal'], $row['localidad'], $row['pcia']);
                    array_push($localidadList, $localidad);
                }
                return $localidadList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Add($id_l, $c_postal, $localidad, $pcia){
            try {
                $query = "insert into $this->tableName (id_l, c_postal, localidad, pcia) values (:id_l, :c_postal, :localidad, :pcia);";
                $this->connection = Connection::GetInstance();
                $parameters['id_l'] = $id_l;
                $parameters['c_postal'] = $c_postal;
                $parameters['localidad'] = $localidad;
                $parameters['pcia'] = $pcia;
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex) {
                throw $ex;
            }
        }

        public function Edit($id, $newId_l, $c_postal, $localidad, $pcia){
            try{
                $query = "update $this->tableName set id_l = :newId_l, c_postal = :c_postal, localidad = :localidad, pcia = :pcia where (id_l = :id);";
                $parameters['newId_l'] = $newId_l;
                $parameters['c_postal'] = $c_postal;
                $parameters['localidad'] = $localidad;
                $parameters['pcia'] = $pcia;
                $parameters['id'] = $id;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Delete($id_l){
            try{
                $query = "delete from $this->tableName where (id_l = :id_l);";
                $parameters['id_l'] = $id_l;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query,$parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }
    }
?>