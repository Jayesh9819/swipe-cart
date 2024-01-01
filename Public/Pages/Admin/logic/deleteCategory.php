<?php
include '../../db/db_connect.php';

if (isset($_GET['id'])) {
    $category_id = $_GET['id'];

    // Perform a query to delete the category with the specified ID
    $delete_sql = "DELETE FROM category WHERE id = $category_id";
    
    if ($conn->query($delete_sql) === TRUE) {
        header('Location: ../category.php' );
        $response['success'] = true;
        $response['message'] = "Category deleted successfully!";
    } else {
        echo "Error deleting the category: " . $conn->error;
    }
} else {
    echo "Invalid category ID.";
}

$conn->close();
