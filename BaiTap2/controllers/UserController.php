<?php
include("class/User.php");
if(isset($_GET["action"])){

    if($_GET["action"] == "add"){
        $first_name = (isset($_POST["first_name"])) ? $_POST["first_name"] : "";
        $last_name = (isset($_POST["last_name"])) ? $_POST["last_name"] : "";
        $email = (isset($_POST["email"])) ? $_POST["email"] : "";
        $password = (isset($_POST["password"])) ? $_POST["password"] : "";
        $type = (isset($_POST["type"])) ? $_POST["type"] : 0;
        $deleted = (isset($_POST["deleted"])) ? $_POST["deleted"] : 0;

        $post = new User("", $first_name, $last_name, $email, $password, $type, $deleted);
        $post->them();
        header("Location: view/users.php");
    }

    if($_GET["action"] == "edit"){
        $id = (isset($_POST["id"])) ? $_POST["id"] : "";

        $first_name = (isset($_POST["first_name"])) ? $_POST["first_name"] : "";
        $last_name = (isset($_POST["last_name"])) ? $_POST["last_name"] : "";
        $email = (isset($_POST["email"])) ? $_POST["email"] : "";
        $password = (isset($_POST["password"])) ? $_POST["password"] : "";
        $type = (isset($_POST["type"])) ? $_POST["type"] : 0;
        $deleted = (isset($_POST["deleted"])) ? $_POST["deleted"] : 0;

        $post = new User("", $first_name, $last_name, $email, $password, $type, $deleted);
        $post->sua($id);
        header("Location: view/users.php");
    }

    if($_GET["action"] == "delete"){
        $id = (isset($_GET["id"])) ? $_GET["id"] : "";

        $post = new User($id, "", "", "", "", "", "");
        $post->xoa($id);
        header("Location: view/users.php");
    }
}
?>