<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$host = "localhost";
$user = "root";
$password = "";
$dbName = "web";
$con = new mysqli($host, $user, $password, $dbName);


function verify_email($toVerify)
{
    $ch = curl_init();

    // Set the URL that you want to GET by using the CURLOPT_URL option.
    curl_setopt($ch, CURLOPT_URL, 'http://emailvalidation.abstractapi.com/v1/?api_key=a463c8e422a34d83aa6b65c119c0ad6f&email=' . $toVerify);

    // Set CURLOPT_RETURNTRANSFER so that the content is returned as a variable.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set CURLOPT_FOLLOWLOCATION to true to follow redirects.
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    // Execute the request.
    $data = curl_exec($ch);

    // Close the cURL handle.
    curl_close($ch);

    $response = json_decode($data, true);

    // Print the data out onto the page.
    // echo $data;

    if ($response["deliverability"] === "DELIVERABLE") {
        return true;
    } else {
        return false;
    }

}


if (
    isset($_POST['name']) && !empty($_POST['name']) &&
    isset($_POST['mail']) && !empty($_POST['mail']) &&
    isset($_POST['purpose']) && !empty($_POST['purpose']) &&
    isset($_POST['subject']) && !empty($_POST['subject']) &&
    isset($_POST['message']) && !empty($_POST['message'])
) {
    // Initialize variables with form data
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $purpose = $_POST['purpose'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "edunavigationai@gmail.com";
    $Message_body = "";
    $Message_body .= "From: " . $name . "<br>";
    $Message_body .= "Email: " . $mail . "<br>";
    $Message_body .= "Purpose: " . $purpose . "<br><br>";
    $Message_body .= "Subject: " . $subject . "<br>";
    $Message_body .= "Message: " . $message . "<br>";

    $verified = verify_email($mail);
    if($verified){

        $phpMailer = new PHPMailer(true);
        $phpMailer->isSMTP();
        $phpMailer->Host = 'smtp.gmail.com';
        $phpMailer->SMTPAuth = true;
        $phpMailer->Username = 'edunavigationai@gmail.com';
        $phpMailer->Password = 'vqsfawpmwbbyyclf';
        $phpMailer->SMTPSecure = 'ssl';
        $phpMailer->Port = 465;

        $phpMailer->setFrom($mail);
        $phpMailer->addAddress($to, $name);
        $phpMailer->isHTML(true);
        $phpMailer->Subject = $subject;
        $phpMailer->Body = $Message_body;
        $phpMailer->send();

        $stmt = $con->prepare("INSERT INTO `contactmessages2` (`name`, `email`, `purpose`, `subject`, `message`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss", $name, $mail, $purpose, $subject, $message);

        if ($stmt->execute()) {
            echo json_encode(['message' => 'Email sent successfully']);
        } else {
            echo json_encode(['message' => 'Error submitting form']);
        }

    }else{
        echo json_encode(['message' => 'Please enter a real Email']);

    }


}


?>
