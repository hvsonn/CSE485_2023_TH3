<!-- <?php
include("../config.php");
class Quizze
{
    private $id;
    private $lesson_id;
    private $title;
    private $created;
    private $updated;
    public $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setLesson_id($lesson_id) {
        $this->lesson_id = $lesson_id;
    }

    public function setCreated($created) {
        $this->created = $created;
    }

    public function setUpdated($updated) {
        $this->updated = $updated;
    }

    public static function getAll()
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->query('SELECT * FROM quizzes');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('SELECT * FROM quizzes WHERE id = :id');
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function save()
    {
        $query = $this->db->prepare('INSERT INTO quizzes (title,lesson_id) VALUES (:title, :lesson_id)');
        $query->bindParam(':title', $this->title, PDO::PARAM_STR);
        $query->bindParam(':lesson_id', $this->lesson_id, PDO::PARAM_STR);
        $query->execute();
    }

    public function update($id)
    {
        $query = $this->db->prepare('UPDATE quizzes SET title = :title, lesson_id = :lesson_id  WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':title', $this->title, PDO::PARAM_STR);
        $query->bindParam(':lesson_id', $this->lesson_id, PDO::PARAM_STR);
        $query->execute();
    }
    


    public static function delete($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $query = $db->prepare('DELETE FROM quizzes WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>-->
