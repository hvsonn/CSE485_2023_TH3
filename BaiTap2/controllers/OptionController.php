<?php
include("models/Options.php");

class OptionController
{
    // Display a list of options
    public function index()
    {
        $list_options = Options::getAll();
        require 'views/options/index.php';
    }

    // Display the option creation form
    public function create()
    {
        require 'views/options/create.php';
    }

    // Store a newly created option in the database
    public function store()
    {
        $question_id = $_POST['QuestionID'];
        $option = $_POST['Option'];
        $is_correct = $_POST['Is Correct'];

        $option = new Options();
        $option->setQuestionID($question_id);
        $option->setOption($option);
        $option->setIsCorrect($is_correct);
        $option->save();

        header('Location: index.php?controller=option&action=index');
    }

    // Display the option editing form
    public function edit()
    {
        $id = $_GET['id'];
        $option = Options::getById($id);
        require 'views/options/edit.php';
    }

    // Update the specified option in the database
    public function update()
    {
        $id = $_POST['id'];
        $question_id = $_POST['QuestionID'];
        $option = $_POST['Option'];

        $option = new Options();
        $option->setQuestionID($question_id);
        $option->setOption($option);
        $option->update($id);

        header('Location: index.php?controller=option&action=index');
    }

    // Delete the specified option from the database
    public function delete()
    {
        $id = $_GET['id'];
        Options::delete($id);
        header('Location: index.php?controller=option&action=index');
    }
}
?>
