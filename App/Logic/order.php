<?php 
class order{
    public function addtocart(){
        $pid=$_GET['id'];
        $uid=$_GET['uid'];
        $quantity=$_GET['quantity'];
        if (empty($pid) || empty($uid) || empty($quantity) || !is_numeric($pid) || !is_numeric($uid) || !is_numeric($quantity)) {
            echo "Invalid input data.";
            return;
        }

        // Insert data into the cart table using prepared statement
        $sql = "INSERT INTO cart (product_id, user_id, quantity) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("iii", $pid, $uid, $quantity);

            if ($stmt->execute()) {
                $_SESSION['status'] = 'sucess';

                header("Location: ../../../index.php/productpage?id=$pid");
            } else {
                echo "Error adding record to cart: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Error preparing statement: " . $this->conn->error;
        }
    }



    
}
$order=new order();
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Print the value of the "action" parameter
    echo "Action: $action<br>";

    switch ($action) {
        case 'addtocart':
            $order->addtocart();
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





?>