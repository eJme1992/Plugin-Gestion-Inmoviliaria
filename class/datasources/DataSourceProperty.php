<?php

require_once(dirname( __FILE__ ).'/../Utils.php');
require_once(dirname( __FILE__ ).'/../connections/ConnectToMySQL.php');

class DataSourceProperty  {

    private $connect;

    public function __construct() {
        $config = file_get_contents(dirname( __FILE__ ).'/../../config/config.json');
        $utils = new Utils();
        $jsonDecoded =  $utils->extractToJson($config);
        
        $this->connect = new ConnectToMySQL($jsonDecoded[0], $jsonDecoded[1], $jsonDecoded[2], $jsonDecoded[3]);
    }

    public function __destruct() {
        $this->connect->close();
    }

    public function execInsertQuery($sql, $types, $params) {
        if ($sql != "") {
            if (count($params) != 0) {
               if ($statement = $this->connect->prepare($sql)) {
                $statement->bind_param($types, ...$params);
                return $statement->execute();
               } else {
                var_dump($this->connect->error);
               }
            } else {
                print_r("Array is empty");
            }
        } else {
            print_r("SQL is empty");
        }
    }

    public function execSelect($sql) {
        try {
            if ($sql !== '') {
                $statement = $this->connect->prepare($sql);
                $statement->execute();
                $result = $statement->get_result();
                $numRows = $result->num_rows;
                if ($numRows != 0) {
                    while ($file = $result->fetch_assoc()) {
                        $arr[] = $file;   
                    }
                } else {
                    $arr = [];
                }
            } else {
                print_r("SQL is empty");
            }
        } catch (Exception $e) {
            print_r('Excepción capturada: ',  $e->getMessage(), "\n");
        }
        return json_encode($arr);
    }

    public function execDeleteQuery($sql, $types, $params) {
        if ($sql != "") {
            if (count($params) != 0) {
               if ($statement = $this->connect->prepare($sql)) {
                $statement->bind_param($types, ...$params);
                return $statement->execute();
               } else {
                var_dump($this->connect->error);
               }
            } else {
                print_r("Array is empty");
            }
        } else {
            print_r("SQL is empty");
        }
    }

    public function lastId() {
        return $this->connect->insert_id;
    }

    public function closeConnect() {
        return $this->connect->close();
    }

    public function execSelectAndCountQuery($sql) {
        if ($sql !== "") {
            if ($statement = $this->connect->prepare($sql)) {
                $statement->execute();
                $statementResult = $statement->get_result();
                $numRows = $statementResult->num_rows;
                if ($numRows !== 0) {
                    while ($file = $statementResult->fetch_assoc()) {
                        $arr[] = $file;   
                    }
                } else {
                    $arr = [];
                }
                $response = json_encode(array("total" => $this->getNumberRows(), "rows" => $arr));

                return $response;
            } else {
                var_dump($this->connect->error);
            }
        } else {
            print_r("SQL is empty.");   
        }
    }

    public function getNumberRows() {
        $sql="SELECT FOUND_ROWS()";
        $statement = $this->connect->prepare($sql);
        $statement->execute();
        $statement->bind_result($num);
        $statement->fetch();
        return $num;
    }

}