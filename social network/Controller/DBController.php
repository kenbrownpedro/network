<?php
class DBController{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "fb";
    public $connection;

    public function __construct(){
        $this->DBConnect();
    }

    public function DBConnect() {
        $this->connection = mysqli_connect($this->servername,$this->username,$this->password,$this->database);
        if(!$this->connection){
            echo "<h3> Failed to connnect to serve  </h3>";
            }else{
            return true;
        }
    }

    public function run($query){
       return mysqli_query($this->connection,$query);
    }
    public function rows($run){
        return mysqli_num_rows($run);
    }

    public function fetch($query){
      return mysqli_fetch_array($query);
    }
    public function assoc($query){
      return mysqli_fetch_assoc($query);
    }
    public function escape($string){
       return mysqli_real_escape_string($this->connection,$string);
    }
    
    


}


?>