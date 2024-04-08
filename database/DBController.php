<?php

class DBController
{
    /*Database Connection Properties*/
    protected $host ='localhost:3307';
    protected $user = 'root';
    protected $password='';
    protected $dbname="shopee";

    // connection property
    public $con = null;
    // call constructor
    public  function  __construct()
    {
        $this->con =mysqli_connect($this->host,$this->user,$this->password,$this->dbname);
        if($this->con->connect_error) {
            echo "Fail".$this->con->connect_error;
        }
    }
    public function __destruct()
    {
        $this->closeConnection();
    }
    // for mysqli closing connection
    protected function closeConnection() {
        if($this->con!=null){
            $this->con->close();
            $this->con=null;
        }
    }
}
