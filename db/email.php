<?php

// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbName = "web";


// ptau ugws yodq moix 
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$con = new mysqli($host, $user, $password, $dbName);

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

    //Create an instance; passing `true` enables exceptions
    $phpMailer = new PHPMailer(true);
    try {
        //Server settings
        // $phpMailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $phpMailer->isSMTP();                                            //Send using SMTP
        $phpMailer->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $phpMailer->SMTPAuth = true;                                   //Enable SMTP authentication
        $phpMailer->Username = 'edunavigationai@gmail.com';                     //SMTP username
        $phpMailer->Password = 'vqsfawpmwbbyyclf';                               //SMTP password
        $phpMailer->SMTPSecure = 'ssl';          //Enable implicit TLS encryption
        $phpMailer->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $phpMailer->setFrom($to);
        $phpMailer->addAddress($mail, $name);     //Add a recipient

        //Content
        $phpMailer->isHTML(true);                                  //Set email format to HTML
        $phpMailer->Subject = $subject;
        $phpMailer->Body = $body;

        $phpMailer->send();
        echo json_encode(['message' => 'Form submitted successfully']);
    } catch (Exception $e) {
        echo json_encode(['message' => 'Please enter a real email']);

    }
}

?>
