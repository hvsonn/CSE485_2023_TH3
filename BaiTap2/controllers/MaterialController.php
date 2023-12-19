<?php
include("models/material.php");

class MaterialController
{
    // Display a list of materials
    public function index()
    {
        $list_materials = Material::getAll();
        require 'views/materials/index.php';
    }

    // Display the materials creation form
    public function create()
    {
        require 'views/materials/create.php';
    }

    // Store a newly created materials in the database
    public function store()
    {
        $title = $_POST['title'];
        $lesson_id = $_POST['lesson_id'];
        $file_path = $_POST['file_path'];

        $material = new Material();
        $material->setTitle($title);
        $material->setLesson_id($lesson_id);
        $material->setFile_path($file_path);
        $material->save();

        header('Location: index.php?controller=material&action=index');
    }

    // Display the materials editing form
    public function edit()
    {
        $id = $_GET['id'];
        $material = Material::getById($id);
        require 'views/materials/edit.php';
    }

    // Update the specified materials in the database
    public function update()
    {
        $id = $_POST['id'];
        $lesson_id = $_POST['lesson_id'];
        $title = $_POST['title'];
        $file_path = $_POST['file_path'];
        

        $material = new Material();
        $material->setTitle($title);
        $material->setLesson_id($lesson_id);
        $material->setFile_path($file_path);
        $material->update($id);

        header('Location: index.php?controller=material&action=index');
    }

    // Delete the specified materials from the database
    public function delete()
    {
        $id = $_GET['id'];
        material::delete($id);
        header('Location: index.php?controller=material&action=index');
    }
}
?>
