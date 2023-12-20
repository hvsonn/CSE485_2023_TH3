<?php
class CourseUser{
    private $course_id;
    private $user_id;
    public $db;
    private $create_at;
    private $update_at;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function setCourseId($course_id){
        $this->course_id = $course_id;
    }
    public function setUserId($user_id){
         $this->user_id = $user_id;
    }
    public static function getAll()
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->query('SELECT * from course_user');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($course_id, $user_id)
    {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $list = [];
        $sql = "SELECT * FROM course_user WHERE course_id = " . $course_id . " AND user_id = " . $user_id;
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $list = $row;
        }
        return $list;            
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
    

    public function update($course_id_old, $user_id_old)
    {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $query = "UPDATE course_user SET user_id = " . $this->user_id . ", course_id = " . $this->course_id
        . " WHERE course_id = " . $course_id_old . " AND user_id = " . $user_id_old;
        $db->query($query);
    }

    public static function delete($course_id, $user_id)
    {
        try{

        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);    
            $query = $db->prepare('DELETE FROM course_user WHERE course_id = :course_id AND user_id = :user_id');
            $query->bindParam(':course_id', $course_id, PDO::PARAM_INT);
            $query->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $query->execute();

        }catch(PDOException $e){
            echo ''. $e->getMessage();
        }
    }




}