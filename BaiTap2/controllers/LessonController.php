<?php
include("models/lesson.php");

class LessonController
{
    // Display a list of courses
    public function index()
    {
        try{
        $list_Lessions = Lesson::getAll();
        require 'views/lesson/index.php';
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
        
    }

    // Display the course creation form
    public function create()
    {
        require 'views/lesson/create.php';
    }

    // Store a newly created course in the database
    public function store()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $lesson = new Lesson();
        $lesson->setTitle($title);
        $lesson->setDescription($description);
        $lesson->save();

        header('Location: index.php?controller=lesson&action=index');
    }

    // Display the course editing form
    public function edit()
    {
        $id = $_GET['id'];
        $lesson= Lesson::getById($id);
        require 'views/lesson/edit.php';
    }

    // Update the specified course in the database
    public function update()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $lesson = new Lesson();
        $lesson->setTitle($title);
        $lesson->setDescription($description);
        $lesson->update($id);

        header('Location: index.php?controller=lesson&action=index');
    }

    // Delete the specified course from the database
    public function delete()
    {
        $id = $_GET['id'];
        Lesson::delete($id);
        header('Location: index.php?controller=lesson&action=index');
    }
}
?>
