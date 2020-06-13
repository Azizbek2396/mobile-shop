<?php


class DBController
{
//    Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '1234';
    protected $database = 'shopee';

    //    Connection property
    public $con = null;

    //    call constuctor
    public function __construct() {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error) {
            echo "Connection Fail: ". $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    //for mysql clocing connection
    protected function closeConnection() {
        if($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }

}
