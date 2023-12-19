<!-- <?php
include("../config.php");
class Material
{
    private $id;
    private $title;
    private $lesson_id;
    private $file_path;
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
    public function setFile_path($file_path) {
        $this->file_path = $file_path;
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

        $query = $db->query('SELECT * FROM materials');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('SELECT * FROM materials WHERE id = :id');
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function save()
    {
        $query = $this->db->prepare('INSERT INTO materials (title,lesson_id,file_path) VALUES (:title, :lesson_id,:file_path)');
        $query->bindParam(':title', $this->title, PDO::PARAM_STR);
        $query->bindParam(':lesson_id', $this->lesson_id, PDO::PARAM_STR);
        $query->bindParam(':file_path', $this->file_path, PDO::PARAM_STR);
        $query->execute();
    }

    public function update($id)
    {
        $query = $this->db->prepare('UPDATE materials SET title = :title, lesson_id = :lesson_id , file_path = :file_path WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':title', $this->title, PDO::PARAM_STR);
        $query->bindParam(':lesson_id', $this->lesson_id, PDO::PARAM_STR);
        $query->bindParam(':file_path', $this->file_path, PDO::PARAM_STR);
        $query->execute();
    }
    


    public static function delete($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $query = $db->prepare('DELETE FROM materials WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>-->
