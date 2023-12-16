<?php
include("models/user.php");

class userController
{
    // Display a list of users
    public function index()
    {
        $list_users = User::getAll();
        require 'views/users/index.php';
    }

    // Display the user creation form
    public function create()
    {
        require 'views/users/create.php';
    }

    // Store a newly created user in the database
    public function store()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $user = new User();
        $user->setTitle($title);
        $user->setContent($content);
        $user->save();

        header('Location: index.php?controller=user&action=index');
    }

    // Display the user editing form
    public function edit()
    {
        $id = $_GET['id'];
        $user = User::getById($id);
        require 'views/users/edit.php';
    }

    // Update the specified user in the database
    public function update()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $user = User::getById($id);
        $user->setTitle($title);
        $user->setContent($content);
        $user->save();

        header('Location: index.php?controller=user&action=index');
    }

    // Delete the specified user from the database
    public function delete()
    {
        $id = $_GET['id'];
        $user = User::getById($id);
        $user->delete();

        header('Location: index.php?controller=user&action=index');
    }
}
?>
