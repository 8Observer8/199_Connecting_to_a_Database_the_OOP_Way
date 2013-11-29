<?php

class DatabaseConnect {

    public function __construct($db_host, $db_username, $db_password) {
        if (!@$this->connect($db_host, $db_username, $db_password)) {
            echo 'Connection failed.';
        } else {
            echo 'Connected to ' . $db_host;
        }
    }

    public function connect() {
        
    }

}

?>
