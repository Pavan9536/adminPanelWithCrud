<?php
class AllCode extends DbConnection{

public function storeUser($name,$email,$pass){
    $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";
    $result = $this->connectdb()->query($query);
    return $result;
}

public function userLogin($email, $pass){
    $query = "SELECT * FROM `users` WHERE `email`='$email' and  `password`='$pass'";
    $result = $this->connectdb()->query($query);
    return $result;
}

public function storeTask($title,$desc){
    $query = "INSERT INTO `tasks`(`title`, `description`) VALUES ('$title','$desc')";
    $result = $this->connectdb()->query($query);
    return $result;
}

public function viewTask(){
    $query = "SELECT * FROM `tasks`";
    $result = $this->connectdb()->query($query);
    return $result; 
}

public function viewTaskById($id){
    $query = "SELECT * FROM `tasks` WHERE `id`='$id'";
    $result = $this->connectdb()->query($query);
    return $result; 
}

public function updateTask($id,$title,$desc){
    $query = "UPDATE `tasks` SET `title`='$title',`description`='$desc' WHERE `id`='$id'";
    $result = $this->connectdb()->query($query);
    return $result; 
}

public function deleteTaskById($id){
    $query = "DELETE FROM `tasks` WHERE `id`='$id'";
    $result = $this->connectdb()->query($query);
    return $result; 
}

}
?>