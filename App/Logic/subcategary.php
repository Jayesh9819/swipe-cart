<?php
class subcategary{
 function subcategary()
    {
         var_dump($_POST);

        error_log("Before database connection"); // Add more log statements as needed
        include './db_connect.php';
        error_log("After database connection");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product_name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
            echo "" . $product_name . "";
            $status = 1;

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO subcategary (name, status) VALUES (?, ?)");

            if ($stmt) {
                $stmt->bind_param("si", $product_name, $status);

                if ($stmt->execute()) {
                    echo "done";
                    // Redirect and exit to ensure no further code execution
                    header("Location: ../../../index.php/subcategary");
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
     public function delete()
    {
        include './db_connect.php';
        if (isset($_GET['id'])) {
            $category_id = $_GET['id'];

            // Perform a query to delete the category with the specified ID
            $delete_sql = "DELETE FROM subcategary WHERE id = $category_id";

            if ($conn->query($delete_sql) === TRUE) {
                header('Location: ../../../index.php/subcategary');
                $response['success'] = true;
                $response['message'] = "Weight deleted successfully!";
            } else {
                echo "Error deleting the category: " . $conn->error;
            }
        } else {
            echo "Invalid category ID.";
        }

        $conn->close();
    }

}
$subcategary =new subcategary();
$subcategary->subcategary();
$subcategary->delete();

    
    