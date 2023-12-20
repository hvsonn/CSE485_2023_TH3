<?php
include("models/Option.php");

class OptionController
{
    // Display a list of options
    public function index()
    {
        $list_options = Option::getAll();
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
        $question_id = $_POST['question_id'];
        $option_text = $_POST['option'];
        $is_correct = $_POST['is_correct'];

        $option = new Option();
        $option->setQuestionID($question_id);
        $option->setOptionText($option_text);
        $option->setIsCorrect($is_correct);
        $option->save();

        header('Location: index.php?controller=option&action=index');
    }

    // Display the option editing form
    public function edit()
    {
        $id = $_GET['id'];
        $option = Option::getById($id);
        require 'views/options/edit.php';
    }

    // Update the specified option in the database
    public function update()
    {
        $id = $_POST['id'];
        $question_id = $_POST['question_id'];
        $option_text = $_POST['option_text'];
        $is_correct = $_POST['is_correct'];

        $option = new Option();
        $option->setQuestionID($question_id);
        $option->setOptionText($option_text);
        $option->setIsCorrect($is_correct);
        $option->update($id);

        header('Location: index.php?controller=option&action=index');
    }

    // Delete the specified option from the database
    public function delete()
    {
        $id = $_GET['id'];
        Option::delete($id);
        header('Location: index.php?controller=option&action=index');
    }
}
?>
