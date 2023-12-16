<?php 
class Category{
    private $matheloai;
    private $tentheloai;
    public function __construct($matheloai, $tentheloai){
        $this->matheloai = $matheloai;
        $this->tentheloai = $tentheloai;
    }
    public function getmatheloai(){
        return $this->matheloai;
    }
    public function gettentheloai(){
        return $this->tentheloai;
    }

    public function settheloai($tentheloai){
        $this->tentheloai = $tentheloai;
    }

    public function themtheloai(){
        include("class/Database.php");
        $tentheloai = (isset($_POST["tentheloai"])) ? $_POST["tentheloai"] : "";

        $sql = "INSERT INTO cms_category (name) VALUES ('" . $tentheloai ."')";
        $connect->query($sql);
    }

    public function suatheloai($id){
        try{
        include("class/Database.php");
        $tentheloai = (isset($_POST["tentheloai"])) ? $_POST["tentheloai"] : "";
            $sql = "UPDATE cms_category SET name='" . $tentheloai . "' WHERE id=" . $id;
        $connect->query($sql); 
        }
        catch(Exception $e){
            echo "". $e->getMessage() ."";
        }
    }
    public function xoatheloai($id){
        include("class/Database.php");
        $sql = "DELETE FROM cms_category WHERE id=" . $id;
        $connect->query($sql);
    }
}
?>