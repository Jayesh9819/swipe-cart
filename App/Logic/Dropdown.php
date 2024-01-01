<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// include '../../Router/router.php';

// var_dump($_POST);
class Dropdown
{
   public function height()
    {
        // var_dump($_POST);

        error_log("Before database connection"); // Add more log statements as needed
        include './db_connect.php';
        error_log("After database connection");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
            echo "" . $product_name . "";
            $status = 1;

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO height (name, status) VALUES (?, ?)");

            if ($stmt) {
                $stmt->bind_param("si", $product_name, $status);

                if ($stmt->execute()) {
                    echo "done";
                    // Redirect and exit to ensure no further code execution
                    header("Location: ../../../index.php/height");
                    exit;
                } else {
                    echo "Error executing the prepared statement: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Error preparing the statement: " . $conn->error;
            }
        }
    }
   public function hdelete()
    {
        include './db_connect.php';
        if (isset($_GET['id'])) {
            $category_id = $_GET['id'];

            // Perform a query to delete the category with the specified ID
            $delete_sql = "DELETE FROM height WHERE id = $category_id";

            if ($conn->query($delete_sql) === TRUE) {
                header('Location: ../../../index.php/height');
                $response['success'] = true;
                $response['message'] = "Category deleted successfully!";
            } else {
                echo "Error deleting the category: " . $conn->error;
            }
        } else {
            echo "Invalid category ID.";
        }

        $conn->close();
    }
}

// Instantiate the class and call the height method
$dropdown = new Dropdown();
$dropdown->height();

// $dropdown = new Dropdown();
$dropdown->hdelete();
