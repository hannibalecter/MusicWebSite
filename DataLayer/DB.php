<?php
class DB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "1234";
    private $dbname = "musicsite";
    private $connection;

    function __construct() {
        $this->connection = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );

        if ($this->connection->connect_error) {
            die("Bağlantı hatası: " . $this->connection->connect_error);
        }

        $this->connection->set_charset("utf8");
    }

    function __destruct() {
        $this->connection->close();
    }

    public function getDataTable($query) {
        $result = $this->connection->query($query);
        return $result;
    }

    public function executeQuery($query) {
        return ($this->connection->query($query) === TRUE);
    }

    public function insertQuery($query) {
        $this->connection->query($query);
        return $this->connection->insert_id;
    }
}
?>