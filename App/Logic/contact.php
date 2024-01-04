<?php
class Contact
{
    public function send_email()
    {
        include './db_connect.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $to = $_POST["to"];
            $msg = $_POST["msg"];

            // Set the email subject
            $subject = 'Contact Form Submission';

            // Compose the email message
            $message = "Name: $name\n";
            $message .= "Email: $email\n";
            $message .= "Mobile: $mobile\n\n";
            $message .= "Message:\n$msg";

            // Additional headers
            $headers = "From: $email\r\n";
            $headers .= "Reply-To: $email\r\n";

            // Send the email
            if (mail($to, $subject, $message, $headers)) {
                echo 'Email sent successfully';
            } else {
                echo 'Error sending email';
            }
        }
    }
}
$contact = new contact();
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // echo "Action: $action<br>";

    switch ($action) {
        case 'send_email':
            $contact->send_email();
            break;
        case 'login':
            $Login->login();
            break;
    }
}
