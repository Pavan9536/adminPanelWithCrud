<?php
class DbConnection{
    private $serverName;
    private $username;
    private $password;
    private $dbname;
    public function connectdb(){
        $this->serverName = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "admin_panel_with_crud";
        $conn = new mysqli($this->serverName,$this->username,$this->password,$this->dbname);
        return $conn;
        mysqli_close($conn);
    }
}
?>