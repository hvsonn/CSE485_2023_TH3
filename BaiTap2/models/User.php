<?php
class User{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $type;
    public $deleted;
    public function __construct($id,$first_name,$last_name,$email,$password,$type,$deleted){
        $this->id=$id;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->email=$email;
        $this->password=$password;
        $this->type=$type;
        $this->deleted=$deleted;
    }

    public function them(){
        include("Database.php");

        $sql = "INSERT INTO cms_user(first_name,last_name,email,password,type,deleted) 
        VALUES ('" . $this->first_name ."'" . ",'" .  $this->last_name . "'" . ",'" .  $this->email . "'" .",'" .  $this->password . "'" . ",'" 
        .  $this->type . "'" . ",'" .  $this->deleted . "')";
        $connect->query($sql);
    }

    public function sua($id){
        include("Database.php");

        $sql = "UPDATE cms_user SET "
        ."first_name='" . $this->first_name . "'"
        .",last_name='" . $this->last_name . "'"
        .",email='" . $this->email . "'"
        .",password='" . $this->password . "'"
        .",type='" .  $this->type . "'"
        .",deleted='" . $this->deleted . "'"
        ." WHERE id=" . $id;
        // echo $sql;die;
        $connect->query($sql);
    }
    public function xoa($id){
        include("Database.php");

        $sql = "DELETE FROM cms_user WHERE id=" . $id;
        $connect->query($sql);
    }
}
?>