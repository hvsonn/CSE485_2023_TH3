<?php
include("../models/Database.php");
if(isset($_GET["action"])){

    if($_GET["action"] == "add"){
        $title = (isset($_POST["title"])) ? $_POST["title"] : "";
        $message = (isset($_POST["message"])) ? $_POST["message"] : "";
        $categoryid = (isset($_POST["categoryid"])) ? $_POST["categoryid"] : "";
        $userid = (isset($_POST["userid"])) ? $_POST["userid"] : "";
        $status = (isset($_POST["status"])) ? $_POST["status"] : "";
        $created = date("Y-m-d");
        $updated = date("Y-m-d");

        $post = new Post("", $title, $message, $categoryid, $userid, $status, $created, $updated);
        $post->them();
        header("Location: view/posts.php");
    }

    if($_GET["action"] == "edit"){
        $id = (isset($_POST["id"])) ? $_POST["id"] : "";

        $title = (isset($_POST["title"])) ? $_POST["title"] : "";
        $message = (isset($_POST["message"])) ? $_POST["message"] : "";
        $categoryid = (isset($_POST["categoryid"])) ? $_POST["categoryid"] : "";
        $userid = (isset($_POST["userid"])) ? $_POST["userid"] : "";
        $status = (isset($_POST["status"])) ? $_POST["status"] : "";
        $created = date("Y-m-d");
        $updated = date("Y-m-d");

        $post = new Post("", $title, $message, $categoryid, $userid, $status, $created, $updated);
        $post->sua($id);
        header("Location: view/posts.php");
    }

    if($_GET["action"] == "delete"){
        $id = (isset($_GET["id"])) ? $_GET["id"] : "";

        $post = new Post($id, "", "", "", "", "", "","");
        $post->xoa($id);
        header("Location: view/posts.php");
    }
}
?>