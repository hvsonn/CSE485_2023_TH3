<!-- <?php
include("../config.php");
class User
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $created;
    private $updated;
    public $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function setPassword($password) {
        $this->password = $password;
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

        $query = $db->query('SELECT * FROM users');
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare('SELECT * FROM users WHERE id = :id');
        $query->bindParam(':id',$id, PDO::PARAM_INT);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function save()
    {
        $query = $this->db->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        $query->bindParam(':name', $this->name, PDO::PARAM_STR);
        $query->bindParam(':email', $this->email, PDO::PARAM_STR);
        $query->bindParam(':password', $this->password, PDO::PARAM_STR);
        $query->execute();
    }

    public function update($id)
    {
        $query = $this->db->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':name', $this->name, PDO::PARAM_STR);
        $query->bindParam(':email', $this->email, PDO::PARAM_STR);
        $query->bindParam(':password', $this->password, PDO::PARAM_STR);
        $query->execute();
    }

    public static function delete($id)
    {
        $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $query = $db->prepare('DELETE FROM users WHERE id = :id');
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?> -->
