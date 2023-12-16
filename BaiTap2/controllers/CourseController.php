<?php
include("models/course.php");

class CourseController
{
    // Display a list of courses
    public function index()
    {
        $list_courses = Course::getAll();
        require 'views/courses/index.php';
    }

    // Display the course creation form
    public function create()
    {
        require 'views/courses/create.php';
    }

    // Store a newly created course in the database
    public function store()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $password = $_POST['password'];

        $course = new Course();
        $course->setTitle($title);
        $course->setDescription($description);
        $course->save();

        header('Location: index.php?controller=course&action=index');
    }

    // Display the course editing form
    public function edit()
    {
        $id = $_GET['id'];
        $course = Course::getById($id);
        require 'views/courses/edit.php';
    }

    // Update the specified course in the database
    public function update()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $course = new Course();
        $course->setTitle($title);
        $course->setDescription($description);
        $course->update($id);

        header('Location: index.php?controller=course&action=index');
    }

    // Delete the specified course from the database
    public function delete()
    {
        $id = $_GET['id'];
        Course::delete($id);
        header('Location: index.php?controller=course&action=index');
    }
}
?>
