<?php

class config
{

    private $HOSTNAME = "127.0.0.1";
    private $USERNAME = "root";
    private $PASSWORD = "root";
    private $DB = "train_booking";
    private $conn;


    function initDB()
    {
    
        $this->conn = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB);


        if (!$this->conn) {
            echo "Connect with DB failed!";
        }
    }


    function insertUser($USERNAME,$email){
        $this->initDB();

        $query = "INSERT INTO user(userName,email) VALUES ('$USERNAME' , '$email')";

        echo $query;

        $res = mysqli_query($this->conn ,$query);

        echo $res;
        return $res;
    }
}
?>