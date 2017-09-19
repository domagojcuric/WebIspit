<?php


class users{
    public $host="localhost";
    public $username="root";
    public $pass="";
    public $db_name="quiz_oops";
    
    public function __construct()
    {
        $this->conn=new mysqli($this->host, $this->username, $this->pass, $this->db_name);
        if($this->conn->connect_errno)
        {
            die  ("databases connection failed".$this->conn->connect_errno);
        }
    }
          
    public function singup($data)
    {
       $this->conn->query($data) ;
       return true;
    }
    
    public function url($url)
       {
        header("location:".$url);
       }
}

new user;

?>