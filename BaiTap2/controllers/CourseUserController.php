<?php
include("models/CourseUser.php");

class CourseUserController
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
        $course_user->setCourseId($course_id);
        $course_user->setUserId($user_id);

        try {
            $course_user->save();
            echo "Record added successfully";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        header('Location: index.php?controller=courseUser&action=index');
    }


    // Display the course editing form
    public function edit()
    {
        $course_id = $_GET['course_id'];
        $user_id = $_GET['user_id'];

        $courseUser = CourseUser::getById($course_id, $user_id);
        require 'views/courseUser/edit.php';
    }

    // Update the specified course in the database
    public function update()
    {
        $course_id = $_POST['course_id'];
        $user_id = $_POST['user_id'];
        
        $course_id_old = $_POST['course_id_old'];
        $user_id_old = $_POST['user_id_old'];

        $courseUser = new CourseUser();
        $courseUser->setCourseId($course_id);
        $courseUser->setUserId($user_id);
        $courseUser->update($course_id_old, $user_id_old);

        header('Location: index.php?controller=courseUser&action=index');
    }

    // Delete the specified course from the database
    public function delete()
    {
        $course_id = $_GET['course_id'];
        $user_id = $_GET['user_id'];

        CourseUser::delete($course_id, $user_id);
        header('Location: index.php?controller=courseUser&action=index');
    }
}
?>
