<?php
    namespace PDO;

    use Models\Residencia;
    use PDOException;

    class ResidenciaPDO{
        private $connection;
        private $tableName = "residencia";

        public function GetAll(){
            try {
                $residenciaList = array();
                $query = "select * from $this->tableName;";
                $this->connection = Connection::GetInstance();
                $residenciaResult = $this->connection->Execute($query);

                foreach($residenciaResult as $row){
                    $residencia = new Residencia($row['id_r'], $row['dir_calle'], $row['dir_numero'], $row['dir_piso_depto']);
                    array_push($residenciaList, $residencia);
                }
                return $residenciaList;
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Edit($id, $newId_r, $dir_calle, $dir_numero, $dir_piso_depto){
            try{
                $query = "update $this->tableName set id_r = :newId_r, dir_calle = :dir_calle, dir_numero = :dir_numero, dir_piso_depto = :dir_piso_depto where(id_r = :id);";
                $parameters['newId_r'] = $newId_r;
                $parameters['dir_calle'] = $dir_calle;
                $parameters['dir_numero'] = $dir_numero;
                $parameters['dir_piso_depto'] = $dir_piso_depto;
                $parameters['id'] = $id;
                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query,$parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }

        public function Add($id_r, $dir_calle, $dir_numero, $dir_piso_depto){
            try {
                $query = "insert into $this->tableName (id_r, dir_calle, dir_numero, dir_piso_depto) values (:id_r, :dir_calle, :dir_numero, :dir_piso_depto)";
                $this->connection = Connection::GetInstance();
                $parameters['id_r'] = $id_r;
                $parameters['dir_calle'] = $dir_calle;
                $parameters['dir_numero'] = $dir_numero;
                $parameters['dir_piso_depto'] = $dir_piso_depto;

                $this->connection->ExecuteNonQuery($query, $parameters);

            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        public function Delete($id_r){
            try{
                $query = "delete from $this->tableName where(id_r = :id_r);";
                $this->connection = Connection::GetInstance();
                $parameters['id_r'] = $id_r;
                $this->connection->ExecuteNonQuery($query, $parameters);
            }
            catch(PDOException $ex){
                throw $ex;
            }
        }
    }
?>