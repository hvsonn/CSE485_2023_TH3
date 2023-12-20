<?php
include("models/CourseUser.php");

class Course_userController
{
    // Display a list of courses
    public function index()
    {
        try{
        $list_course_user = CourseUser::getAll();
        require 'views/courseuser/index.php';
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
        
    }

    // Display the course creation form
    public function create()
    {
        require 'views/courseuser/create.php';
    }

    // Store a newly created course in the database

public function store()
{
    $course_id = $_POST['course_id'];
    $user_id = $_POST['user_id'];

    $course_user = new CourseUser();
    $course_user->setCourse_id($course_id);
    $course_user->setUser_id($user_id);

    try {
        $course_user->save();
        echo "Record added successfully";
    } catch (Exception $e) {
        echo $e->getMessage();
    }
      //  header('Location: index.php?controller=course_user&action=index');

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
        CourseUser::delete($id);
        header('Location: index.php?controller=course_user&action=index');
    }
}
?>
