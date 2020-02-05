<?php
class DBController {
    private $host = "YOUR DATABASE HOST";
    private $user = "USERNAME";
    private $password = "YOUR PASSWORD HERE";
    private $database = "DATABASE NAME";
    private $conn;

    function __construct() {
        $this->conn = new mysqli($this->host,$this->user,$this->password,$this->database);
    }

    function __destruct() {
        $this->conn->close();
    }

    function runQuery($query) {
        $result = $this->conn->query($query);
        $result_set = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $result_set[] = $row;
            }
        }
        return $result_set;
    }

    function numRows($query) {
        $result = $this->conn->query($query);
        return $result->num_rows;
    }

    function doQuery($query) {
        $result = $this->conn->query($query);
        return $result;
    }

    function escape_string($string) {
        return $this->conn->real_escape_string($string);
    }

    function error(){
        return $this->conn->error;
    }
}
