<?php 
class Login{
    public function create_user(){
        include './db_connect.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $password = $_POST["pass"];
            $confirmPassword = $_POST["confirm_pass"];
            if (empty($name) || empty($email) || empty($mobile) || empty($password) || empty($confirmPassword)) {
                header('Location: ../../../index.php/SignUp?act=req');

            }
        
            if ($password !== $confirmPassword) {
                header('Location: ../../../index.php/SignUp?act=pass');
            }else{
            $stmt = $conn->prepare("INSERT INTO users (name, email,contact,password) VALUES (?, ?,?,?)");

            if ($stmt) {
                $stmt->bind_param("ssss", $name, $email, $mobile,$password);

                if ($stmt->execute()) {
                    header('Location: ../../../index.php/Login?act=sucess');
                    $response['success'] = true;
                    $response['message'] = "Category deleted successfully!";
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
}

$Login = new Login();
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