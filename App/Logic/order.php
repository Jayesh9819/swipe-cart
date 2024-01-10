<?php 
class order{
    public function addToCart()
    {
        include './db_connect.php';
        $pid = $_GET['pid'];
        $uid = $_GET['uid'];
        $quantity = $_GET['quantity'];

        if (empty($pid) || empty($uid) || empty($quantity) || !is_numeric($pid) || !is_numeric($uid) || !is_numeric($quantity)) {
            echo "Invalid input data.";
            return;
        }

        // Check if the product is already in the cart
        $checkSql = "SELECT * FROM cart WHERE product_id = ? AND user_id = ?";
        $checkStmt = $conn->prepare($checkSql);

        if ($checkStmt) {
            $checkStmt->bind_param("ii", $pid, $uid);
            $checkStmt->execute();
            $result = $checkStmt->get_result();

            if ($result->num_rows > 0) {
                // Product already exists in the cart, update the quantity
                $updateSql = "UPDATE cart SET quantity = quantity + ? WHERE product_id = ? AND user_id = ?";
                $updateStmt = $conn->prepare($updateSql);

                if ($updateStmt) {
                    $updateStmt->bind_param("iii", $quantity, $pid, $uid);

                    if ($updateStmt->execute()) {
                        $_SESSION['status'] = 'success';
                        header("Location: ../../../index.php/productpage?id=$pid");
                    } else {
                        echo "Error updating quantity in cart: " . $updateStmt->error;
                    }

                    $updateStmt->close();
                } else {
                    echo "Error preparing update statement: " . $conn->error;
                }

                // Close the check statement and return
                $checkStmt->close();
                return;
            }
        } else {
            echo "Error preparing check statement: " . $conn->error;
        }

        // Product not in cart, insert new record
        $insertSql = "INSERT INTO cart (product_id, user_id, quantity) VALUES (?, ?, ?)";
        $insertStmt = $conn->prepare($insertSql);

        if ($insertStmt) {
            $insertStmt->bind_param("iii", $pid, $uid, $quantity);

            if ($insertStmt->execute()) {
                $_SESSION['status'] = 'success';
                header("Location: ../../../index.php/productpage?id=$pid");
            } else {
                echo "Error adding record to cart: " . $insertStmt->error;
            }

            $insertStmt->close();
        } else {
            echo "Error preparing insert statement: " . $conn->error;
        }

        // Close the check statement
        $checkStmt->close();
    }
    public function deletecart(){
        include './db_connect.php';
        
        $response = array('success' => false, 'message' => '');
        
        if (isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];
        
            // Perform a query to delete the product from the cart
            $delete_sql = "DELETE FROM cart WHERE id = $product_id";
        
            if ($conn->query($delete_sql) === TRUE) {
                $response['success'] = true;
                $response['message'] = "Item removed from the cart successfully!";
            } else {
                $response['message'] = "Error deleting the item from the cart: " . $conn->error;
            }
        } else {
            $response['message'] = "Invalid product ID.$id";
        }
        
        $conn->close();
        
        // Send the response back to the JavaScript with the correct content type
        header('Content-Type: application/json');
        echo json_encode($response);
                
    }
    
}
$order=new order();
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Print the value of the "action" parameter
    //echo "Action: $action<br>";

    switch ($action) {
        case 'addtocart':
            $order->addToCart();
            break;

        case 'deletecart':
            $order->deletecart();
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





?>