<?php
include("models/quizze.php");

class QuizzeController
{
    // Display a list of quizzes
    public function index()
    {
        $list_quizzes = Quizze::getAll();
        require 'views/quizzes/index.php';
    }

    // Display the quizzes creation form
    public function create()
    {
        require 'views/quizzes/create.php';
    }

    // Store a newly created quizzes in the database
    public function store()
    {
        $title = $_POST['title'];
        $lesson_id = $_POST['lesson_id'];

        $quizze = new Quizze();
        $quizze->setTitle($title);
        $quizze->setLesson_id($lesson_id);
        $quizze->save();

        header('Location: index.php?controller=quizze&action=index');
    }

    // Display the quizzes editing form
    public function edit()
    {
        $id = $_GET['id'];
        $quizze = Quizze::getById($id);
        require 'views/quizzes/edit.php';
    }

    // Update the specified quizzes in the database
    public function update()
    {
        $id = $_POST['id'];
        $lesson_id = $_POST['lesson_id'];
        $title = $_POST['title'];
     
        

        $quizze = new Quizze();
        $quizze->setTitle($title);
        $quizze->setLesson_id($lesson_id);
        $quizze->update($id);

        header('Location: index.php?controller=quizze&action=index');
    }

    // Delete the specified quizzes from the database
    public function delete()
    {
        $id = $_GET['id'];
        Quizze::delete($id);
        header('Location: index.php?controller=quizze&action=index');
    }
}
?>
