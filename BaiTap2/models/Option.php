<!-- <?php
include("../config.php");
class Option
{
    private $id;
    private $question_id;
    private $option_text;
    private $is_correct;
    private $created;
    private $updated;
    public $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function setQuestionID($question_id) {
        $this->question_id = $question_id;
    }

    public function setOptionText($option_text) {
        $this->option_text = $option_text;
    }
    public function setIsCorrect($is_correct) {
        $this->is_correct = $is_correct;
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

        $query = $db->query('SELECT * FROM options');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('SELECT * FROM options WHERE id = :id');
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function save()
    {
        $query = $this->db->prepare('INSERT INTO options (question_id, option_text, is_correct) VALUES (:question_id, :option_text, :is_correct)');
        $query->bindParam(':question_id', $this->question_id, PDO::PARAM_INT);
        $query->bindParam(':option_text',$this->option_text,PDO::PARAM_STR);
        $query->bindParam(':is_correct', $this->is_correct, PDO::PARAM_STR);
        $query->execute();
        
    }

    public function update($id)
    {
        $query = $this->db->prepare('UPDATE options SET question_id = :question_id, option_text = :option_text, is_correct = :is_correct WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':question_id', $this->question_id, PDO::PARAM_STR);
        $query->bindParam(':option_text', $this->option_text, PDO::PARAM_STR);
        $query->bindParam(':is_correct', $this->is_correct, PDO::PARAM_STR);
        $query->execute();
    }

    public static function delete($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $query = $db->prepare('DELETE FROM options WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?> -->