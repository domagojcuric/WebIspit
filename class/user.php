<?php

session_start();
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
    public function signin($email,$pass)
    {
        $query=$this->conn->query("SELECT email,pass FROM signup WHERE email$email' AND pass='$pass'");
        $usery->fetch_array(MYSQLI_ASSOC);
        if ($query->num_rows>0)
        {
            $_SESSION['email']=$email;
            return TRUE;
        }
        else 
        {
            return FALSE;
        }
            
        }
    public function url($url)
       {
        header("location:".$url);
       }
}

new user;

?>