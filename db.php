<?php

// class Db
class Db {
    private $db;
    private $host;
    private $user;
    private $pass;
    private $dbname;

    public function __construct($host, $user, $pass, $dbname) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
    }

    public function connect() {
        $dsn = "mysql:host=$this->host;port=$this->port;dbname=$this->dbname";
        $this->db = new PDO($dsn, $this->user, $this->pass);
    }

    public function query($sql) {
        $this->connect();
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}