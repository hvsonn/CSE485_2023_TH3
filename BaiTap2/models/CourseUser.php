<?php
class CourseUser{
    private $course_id;
    private $user_id;
    public $db;


    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function setCourse_id($couse_id){
        $this->couse_id = $couse_id;
    }
    public function setuser_id($user_id){
         $this->user_id = $user_id;
    }
    public static function getAll()
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->query('SELECT * from course_user');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('SELECT * FROM course_user WHERE id = :id');
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function save()
    {
        try {
            $query = $this->db->prepare('INSERT INTO course_user (course_id, user_id) VALUES (:course_id, :user_id)');
            $query->bindParam(':course_id', $this->course_id, PDO::PARAM_STR);
            $query->bindParam(':user_id', $this->user_id, PDO::PARAM_STR);
            $query->execute();
        } catch (PDOException $e) {
            throw new Exception('Error saving record: ' . $e->getMessage());
        }
    }
    

    public function update($id)
    {
        $query = $this->db->prepare('UPDATE course_user SET title = :title, description = :description WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':title', $this->course_id, PDO::PARAM_STR);
        $query->bindParam(':description', $this->user_id, PDO::PARAM_STR);
        $query->execute();
    }

    public static function delete($id)
    {
        try{

        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);    
            $query = $db->prepare('DELETE FROM course_user WHERE course_id = :id');
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            $query->execute();

        }catch(PDOException $e){
            echo ''. $e->getMessage();
        }



    }




}