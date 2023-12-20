<?php
include("models/Question.php");

class QuestionController
{
    // Display a list of options
    public function index()
    {
        $list_questions = Question::getAll();      
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
        $quiz_id = $_POST['quiz_id'];
        $question_param = $_POST['question'];

        $question = new Question();
        $question->setQuizid($quiz_id);
        $question->setQuestion($question_param);
        $question->save();

        header('Location: index.php?controller=question&action=index');
    }

    // Display the question editing form
    public function edit()
    {
        $id = $_GET['id'];
        $question = Question::getById($id);
    }

    // Update the specified question in the database
    public function update()
    {
        $id = $_POST['id'];
        $quiz_id = $_POST['quiz_id'];
        $question = $_POST['question'];

        $question = new Question();
        $question->setQuizid($quiz_id);
        $question->setQuestion($question);
        $question->update($id);

        header('Location: index.php?controller=question&action=index');
    }

    // Delete the specified question from the database
    public function delete()
    {
        $id = $_GET['id'];
        Question::delete($id);
        header('Location: index.php?controller=question&action=index');
    }
}
?>
