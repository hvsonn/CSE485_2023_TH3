<?php
include("models/Questions.php");

class QuestionController
{
    // Display a list of options
    public function index()
    {
        $list_questions = Questions::getAll();
        require 'views/questions/index.php';
    }

    // Display the course creation form
    public function create()
    {
        require 'views/questions/create.php';
    }

    // Store a newly created course in the database
    public function store()
    {
        $quiz_id = $_POST['Quiz_id'];
        $question = $_POST['Question'];

        $questions = new Questions();
        $questions->setQuizid($quiz_id);
        $questions->setQuestion($question);
        $questions->save();

        header('Location: index.php?controller=question&action=index');
    }

    // Display the question editing form
    public function edit()
    {
        $id = $_GET['id'];
        $questions = Questions::getById($id);
        require 'views/questions/edit.php';
    }

    // Update the specified question in the database
    public function update()
    {
        $id = $_POST['id'];
        $quiz_id = $_POST['Quiz_id'];
        $question = $_POST['Question'];

        $questions = new Questions();
        $questions->setQuizid($quiz_id);
        $questions->setQuestion($question);
        $questions->update($id);

        header('Location: index.php?controller=question&action=index');
    }

    // Delete the specified question from the database
    public function delete()
    {
        $id = $_GET['id'];
        Questions::delete($id);
        header('Location: index.php?controller=question&action=index');
    }
}
?>
