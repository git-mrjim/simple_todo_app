<?php

class Database {

    private $dsn;
    private $pdo;

    function __construct($config, $username='root', $password='') {

        $this->dsn = 'mysql:'. http_build_query($config, '', ';');
        $this->pdo = new PDO($this->dsn, $username, $password);
    }

    public function query($query) {
        // Connect to MySql Database
        
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result ? $result : [];
    }

}