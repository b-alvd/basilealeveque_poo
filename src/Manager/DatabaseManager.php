<?php
    namespace Src\Manager;

    use PDO;
    use PDOException;

    class DataBaseManager {
        private PDO $connection;

        public function __construct() {
            try {
                $host = "localhost";
                $user = "root";
                $password = "";
                $databaseName = "basilealeveque_poo";

                $this->connection = new PDO("mysql:host=$host;dbname=$databaseName", $user, $password);
                $this->configPdo();
            } catch(PDOException $e) {
                echo("Error: " . $e->getMessage());
                exit();
            }
        }

        private function configPdo() {
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }

        public function getConnection() {
            return $this->connection;
        }
    }
?>