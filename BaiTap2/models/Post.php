<?php
class Post{
    public $id;
    public $title;
    public $message;
    public $category_id;
    public $userid;
    public $status;
    public $created;
    public $updated;
    public function __construct($id,$title,$message,$category_id,$userid,$status,$created,$updated){
        $this->id=$id;
        $this->title=$title;
        $this->message=$message;
        $this->category_id=$category_id;
        $this->userid=$userid;
        $this->status=$status;
        $this->created=$created;
        $this->updated=$updated;
    }

    public function them(){
        include("Database.php");

        $sql = "INSERT INTO cms_posts(title,message,category_id,userid,status,created,updated) 
        VALUES ('" . $this->title ."'" . ",'" .  $this->message . "'" . ",'" .  $this->category_id . "'" .",'" .  $this->userid . "'" . ",'" 
        .  $this->status . "'" . ",'" .  $this->created . "','" .  $this->updated . "')";
        $connect->query($sql);
    }

    public function sua($id){
        include("Database.php");

        $sql = "UPDATE cms_posts SET "
        ."title='" . $this->title . "'"
        .",message='" . $this->message . "'"
        .",category_id='" . $this->category_id . "'"
        .",userid='" . $this->userid . "'"
        .",status='" .  $this->status . "'"
        .",created='" . $this->created . "'"
        .",updated='" . $this->updated . "'"
        ." WHERE id=" . $id;
        $connect->query($sql);
    }
    public function xoa($id){
        include("Database.php");

        $sql = "DELETE FROM cms_posts WHERE id=" . $id;
        $connect->query($sql);
    }
}
?>