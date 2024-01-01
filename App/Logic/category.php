<?php
class category
{
    public function acategory()
    {

        include './db_connect.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product_name = $_POST["name"];

            $main_image = "";
            if (!empty($_FILES['img']['name'])) {
                $uploadDir = "../../Other/assets/category/";
                $main_image_name = $_FILES['img']['name'];
                $main_image_tmp = $_FILES['img']['tmp_name'];
                $main_image_path = $uploadDir . $main_image_name;
                move_uploaded_file($main_image_tmp, $main_image_path);
                $main_image = "../Other/assets/category/".$main_image_name;
            }
            $status = 1;

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO category (name, image,status) VALUES (?, ?,?)");

            if ($stmt) {
                $stmt->bind_param("sss", $product_name, $main_image, $status);

                if ($stmt->execute()) {
                    header('Location: ../../../index.php/category');
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
    public function delete(){
                include './db_connect.php';

        if (isset($_GET['id'])) {
    $category_id = $_GET['id'];

    // Perform a query to delete the category with the specified ID
    $delete_sql = "DELETE FROM category WHERE id = $category_id";
    
    if ($conn->query($delete_sql) === TRUE) {
        header('Location: ../../../index.php/category' );
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
$category =new category();
$category-> acategory();
$category-> delete();