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
                        $stmt = $conn->prepare("INSERT INTO users (name, email, contact, password) VALUES (?, ?, ?, ?)");

                        if ($stmt) {
                            $stmt->bind_param("ssss", $name, $email, $mobile, $password);

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

        default:
            echo "Invalid action requested.";
            break;
    }
} else {
    echo "No action specified.";
}
?>
