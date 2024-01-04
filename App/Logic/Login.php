<?php 
class Login{
    public function create_user(){
        include './db_connect.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $password = $_POST["pass"];
            $confirmPassword = $_POST["con-pass"];
            $type='user';
            $status=1;
            
            // Check if email or mobile already exists
            $checkQuery = $conn->prepare("SELECT * FROM users WHERE email = ? OR contact = ?");
            $checkQuery->bind_param("ss", $email, $mobile);
            $checkQuery->execute();
            $result = $checkQuery->get_result();
            
            if ($result->num_rows > 0) {
                // Email or mobile already exists
                $_SESSION['act'] = 'duplicate';
                header('Location: ../../../index.php/SignUp');
                
            } else {
                // Email and mobile are unique
                if (empty($name) || empty($email) || empty($mobile) || empty($password) || empty($confirmPassword)) {
                    $_SESSION['act'] = 'req';
                    header('Location: ../../../index.php/SignUp');
                } else {
                    if ($password !== $confirmPassword) {
                        $_SESSION['act'] = 'pass';
                        header('Location: ../../../index.php/SignUp');
                    } else {
                        $stmt = $conn->prepare("INSERT INTO users (name, email, contact, password,type,status) VALUES (?, ?, ?, ?,?,?)");

                        if ($stmt) {
                            $stmt->bind_param("ssssss", $name, $email, $mobile, $password,$type,$status);

                            if ($stmt->execute()) {
                                $_SESSION['act'] = 'success';
                                header('Location: ../../../index.php/Login');
                            } else {
                                echo "Error executing the prepared statement: " . $stmt->error;
                            }

                            $stmt->close();
                        } else {
                            echo "Error preparing the statement: " . $conn->error;
                        }
                    }
                }
            }

            $checkQuery->close();
        }
    }
    public function login(){
        include './db_connect.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $emailOrMobile = $_POST["user"];
            $pass = $_POST["pass"];

            // Check if the provided email/mobile and password match a user
            $stmt = $conn->prepare("SELECT name FROM users WHERE (email = ? OR contact = ?) AND password = ?");
            $stmt->bind_param("sss", $emailOrMobile, $emailOrMobile, $pass);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                // User found, store the name in the session
                $stmt->bind_result($name);
                // $stmt->bind_result($type);
                // $stmt->bind_result($id);


                $stmt->fetch();

                session_start();
                $_SESSION['name'] = $name;
                // $_SESSION['type'] = $type;
                // $_SESSION['id'] = $id;


                header('Location: ../../../index.php/Welcome'); // Redirect to home or any other page
            } else {
                // User not found or incorrect credentials
                $_SESSION['act'] = 'Invalid';
                header('Location: ../../../index.php/Login');
            }

            $stmt->close();
        }
}
}
$Login = new Login();
session_start();
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    echo "Action: $action<br>";

    switch ($action) {
        case 'create_user':
            $Login->create_user();
            break;
        case 'login':
            $Login->login();
            break;

        default:
            echo "Invalid action requested.";
            break;
    }
} else {
    echo "No action specified.";
}
?>
