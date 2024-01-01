<?php
var_dump($_GET);


class Product
{
    private $db;

    // public function __construct()
    // {
    //     include './db_connect.php';
    //     $this->db = $conn;
    // }

    public function addproduct()
    {
                var_dump($_POST);

                include './db_connect.php';

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the product details
            $product_name = $_POST["name"];
            echo $product_name;
            $seller_id = $_POST["Seller_id"];
            $type = $_POST["type"];
            $category = $_POST["category"];
            $subcategory = $_POST["subcategory"];
            $hsn = $_POST["hsn"];
            $tax = $_POST["tax"];
            $country = $_POST["country"];
            $brand = $_POST["brand"];
            $unit = $_POST["Unit"];
            $exchangeable_value = $_POST["exchangeableValue"];
            $refundable_value = $_POST["refundableValue"];
            $cod_value = $_POST["CODValue"];
            $description = $_POST["description"];
            $color = $_POST["color"];
            $size = $_POST["size"];
            $length = $_POST["length"];
            $breadth = $_POST["breadth"];
            $height = $_POST["height"];
            $style_code = $_POST["style-code"];
            $price = $_POST["price"];
            $weight = $_POST["weight"];
            $box_length = $_POST["boxlength"];
            $box_breadth = $_POST["boxbreadth"];
            $box_height = $_POST["boxheight"];
            $mrp = $_POST["MRP"];
            $sku = $_POST["sku"];
            $stock_status = $_POST["stockstatus"];
            $total_quantity = $_POST["totalQuantity"];
            $manufacturer_name = $_POST["manufacturer"];
            $status=0;
            // echo $manufacturer_name;
            if (!empty($_FILES['mainimage']['name'])) {
    $uploadDir = "../../Other/assets/product/";
    $main_image_name = $_FILES['mainimage']['name'];
    $main_image_tmp = $_FILES['mainimage']['tmp_name'];
    $main_image_path = $uploadDir . $main_image_name;
    move_uploaded_file($main_image_tmp, $main_image_path);
    $main_image = "../Other/assets/product/" . $main_image_name;
}

// Handle Cover Images
if (!empty($_FILES['coverImage']['name'])) {
    $uploadDir = "../../Other/assets/product/";

    foreach ($_FILES['coverImage']['name'] as $key => $cover_image_name) {
        $cover_image_tmp = $_FILES['coverImage']['tmp_name'][$key];
        $cover_image_path = $uploadDir . $cover_image_name;
        move_uploaded_file($cover_image_tmp, $cover_image_path);
        $cover_images[] = "../Other/assets/product/" . $cover_image_name;
    }
}
$cover_images_str = implode(", ", $cover_images);
$discount = (($mrp - $price) / $mrp) * 100;

            

// ...

// Insert product details into the database
$query = "INSERT INTO product (product_name, seller_id, category, sub_category, HSN, GST, country, Brand, unit, 
            is_exchangable, is_returnable, is_cod, Description, color, size, length, breadth, height, style_code, coust_price, 
            weight, box_length, box_breadth, box_height, MRP, sku, stock_status, net_quantity, manufacter, main_img, cover_img,status,Discount) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?)";

echo "SQL Query: " . $query . "<br>";  // Debugging Output

$stmt = $conn->prepare($query);

// Check for errors in SQL query
if ($stmt === false) {
    die("Error in SQL query: " . $conn->error);
}

// Convert the array to a comma-separated string
$cover_images_str = implode(", ", $cover_images);

$stmt->bind_param(
    "sssssssssssssssssssssssssssssssss",
    $product_name, $seller_id, $category, $subcategory, $hsn, $tax, $country, $brand, $unit,
    $exchangeable_value, $refundable_value, $cod_value, $description, $color, $size, $length, $breadth,
    $height, $style_code, $price, $weight, $box_length, $box_breadth, $box_height, $mrp, $sku,
    $stock_status, $total_quantity, $manufacturer_name, $main_image, $cover_images_str, $status,$discount);

// ...
                if ($stmt->execute()) {
                    header('Location: ../../../index.php/product');
                    $response['success'] = true;
                    $response['message'] = "Category deleted successfully!";
                } else {
                    echo "Error executing the prepared statement: " . $stmt->error;
                }
            $stmt->close();

            // Close the database connection
            $this->db->close();
        }
    }
        public function delete(){
                include './db_connect.php';

        if (isset($_GET['id'])) {
    $category_id = $_GET['id'];

    // Perform a query to delete the category with the specified ID
    $delete_sql = "DELETE FROM product WHERE id = $category_id";
    
    if ($conn->query($delete_sql) === TRUE) {
        header('Location: ../../../index.php/product' );
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
public function status(){
    // if (isset($_GET['action'])) {
//     $action = $_GET['action'];
//  echo $action;
    include './db_connect.php';

    if (isset($_GET['id'])) {
        $product_id = $_GET['id'];
        $sql = "SELECT status FROM product WHERE id=$product_id";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();
            $currentStatus = $row['status'];

            if ($currentStatus == 1) {
                $updatesql = "UPDATE product SET status = 0 WHERE id = $product_id";
                if ($conn->query($updatesql) === TRUE) {
                    header('Location: ../../../index.php/product');
                    exit();
                }
            } else if ($currentStatus == 0) {
                $updatesql = "UPDATE product SET status = 1 WHERE id = $product_id";
                if ($conn->query($updatesql) === TRUE) {
                    header('Location: ../../../index.php/product');
                    exit();
                }
            }
        }
    }
}
public function adminPrice(){
        include './db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    Var_dump($_POST);
    // Retrieve data from the AJAX request
    $productId = $_POST['id'];
    $admin_price = $_POST['admin_price'];
    echo $admin_price;
    


    
}}
}

// Create an instance of the Product class
$productObj = new Product();
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Print the value of the "action" parameter
    echo "Action: $action<br>";

    switch ($action) {
        case 'addproduct':
            $productObj->addproduct();
            break;

        case 'delete':
            $productObj->delete();
            break;

        case 'status':
            $productObj->status();
            break;
        case 'adminPrice':
            $productObj->adminPrice();
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

// // Call the addProduct method to handle the form submission
// $productObj->addproduct();
// $productObj->delete();
// $productObj->status();


?>
