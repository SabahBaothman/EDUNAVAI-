<?php

// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbName = "web";
$con = new mysqli($host, $user, $password, $dbName);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (
    isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['mail']) && !empty($_POST['mail']) &&
    isset($_POST['purpose']) && !empty($_POST['purpose']) &&
    isset($_POST['subject']) && !empty($_POST['subject']) &&
    isset($_POST['message']) && !empty($_POST['message'])
) {
    // Form Inputs
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $purpose = $_POST['purpose'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    //Email Info
    $to = "edunavigationai@gmail.com";
    $body = "";
    $body .= "From: " . $name . "\n";
    $body .= "Email: " . $mail . "\n\n";
    $body .= "Message: " . $message . "\n";

    $phpMailer = new PHPMailer(true);
    try {
        $phpMailer->isSMTP();                                            //Send using SMTP
        $phpMailer->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $phpMailer->SMTPAuth = true;                                   //Enable SMTP authentication
        $phpMailer->Username = 'edunavigationai@gmail.com';                     //SMTP username
        $phpMailer->Password = 'vqsfawpmwbbyyclf';                               //SMTP password
        $phpMailer->SMTPSecure = 'ssl';          //Enable implicit TLS encryption
        $phpMailer->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $phpMailer->setFrom($to);
        $phpMailer->addAddress($mail, $name);     //Add a recipient

        $phpMailer->isHTML(true);                                  //Set email format to HTML
        $phpMailer->Subject = $subject;
        $phpMailer->Body = $body;

        $phpMailer->send();
        $stmt = $con->prepare("INSERT INTO `contactmessages2` (`name`, `email`, `purpose`, `subject`, `message`) VALUES (?,?,?,?,?)");
    
        $stmt->bind_param("sssss", $name, $mail, $purpose, $subject, $message);
        if ($stmt->execute()) {
            echo json_encode(['message' => 'Form submitted successfully']);
        } else {
            echo json_encode(['message' => 'Error submitting form']);
        }

    } catch (Exception $e) {
        echo json_encode(['message' => 'Please enter a real email']);

    }
}

?>
