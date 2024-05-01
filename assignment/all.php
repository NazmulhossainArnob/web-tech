<?php
session_start();

include_once '../model/userModel.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $userModel = new UserModel();
    $user = $userModel->getUser($username, $password);

    if ($user) {
        $_SESSION["username"] = $username;
        header("Location: ../index.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>


<?php
include_once 'db.php';

class UserModel {
    public function getUser($username, $password) {
        $db = new DB();
        $conn = $db->connect();

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
}
?>


<?php
class DB {
    private $servername = "localhost";
    private $username = "your_username";
    private $password = "your_password";
    private $dbname = "your_database";

    public function connect() {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>