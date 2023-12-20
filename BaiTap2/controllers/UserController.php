<?php
include("models/user.php");

class UserController
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();
        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword($password);
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();
        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->update($id);

        header('Location: index.php?controller=user&action=index');
    }

    // Delete the specified user from the database
    public function delete()
    {
        $id = $_GET['id'];
        User::delete($id);
        header('Location: index.php?controller=user&action=index');
    }
}
?>
