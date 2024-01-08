<?php
class frontend
{
    public function addBanner()
    {
        print_r($_POST);
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
                $main_image = "../Other/assets/category/" . $main_image_name;
            }
            $product_info = $_POST["info"];
            $discount = $_POST["discount"];
            $postion = $_POST["position"];
            $link = $_POST["link"];
            // $status = 1;

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("INSERT INTO slider (name, image,content,position,link,discount) VALUES (?, ?,?,?,?,?)");

            if ($stmt) {
                $stmt->bind_param("ssssss", $product_name, $main_image, $product_info, $postion, $link, $discount);

                if ($stmt->execute()) {
                    header('Location: ../../../index.php/banner');
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
    public function deleteBanner()
    {
        include './db_connect.php';

        if (isset($_GET['id'])) {
            $category_id = $_GET['id'];

            // Perform a query to delete the category with the specified ID
            $delete_sql = "DELETE FROM slider WHERE id = $category_id";

            if ($conn->query($delete_sql) === TRUE) {
                header('Location: ../../../index.php/banner');
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
    public function updateBanner()
    {
        include './db_connect.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $banner_id = $_POST["banner_id"];
            $product_name = $_POST["name"];
            $product_info = $_POST["info"];
            $discount = $_POST["discount"];
            $position = $_POST["position"];
            $link = $_POST["link"];

            $main_image = "";
            $removeImage = isset($_POST['removeImage']) ? $_POST['removeImage'] : false;

            // Handle image upload and removal
            if (!empty($_FILES['img']['name'])) {
                $uploadDir = "../../Other/assets/category/";
                $main_image_name = $_FILES['img']['name'];
                $main_image_tmp = $_FILES['img']['tmp_name'];
                $main_image_path = $uploadDir . $main_image_name;
                move_uploaded_file($main_image_tmp, $main_image_path);
                $main_image = "../Other/assets/category/" . $main_image_name;
            } elseif ($removeImage) {
                // If removeImage is checked, remove the existing image
                $main_image = "";
            }

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare("UPDATE slider SET name=?, image=?, content=?, position=?, link=?, discount=? WHERE id=?");

            if ($stmt) {
                $stmt->bind_param("ssssssi", $product_name, $main_image, $product_info, $position, $link, $discount, $banner_id);

                if ($stmt->execute()) {
                    header('Location: ../../../index.php/banner');
                    $response['success'] = true;
                    $response['message'] = "Banner updated successfully!";
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

$frontend = new frontend();
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Print the value of the "action" parameter
    echo "Action: $action<br>";

    switch ($action) {
        case 'addBanner':
            $frontend->addBanner();
            break;

        case 'deleteBanner':
            $frontend->deleteBanner();
            break;

        case 'addOffer':
            $frontend->addOffer();
            break;
        case 'updateBanner':
            $frontend->updateBanner();
            break;

        default:
            // Handle invalid action
            echo "Invalid action requested.";
            break;
    }
} else {
    // Handle case where no action is specified
    echo "No action specified.";
}
