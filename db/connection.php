<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbName = "cpcs403";
  
    // Connect to the database
    $con = new mysqli($host, $user, $password, $dbName);


if (isset($_POST['sendMsssage'])) {

    // Initialize variables with form data
    $name = $_POST['name'];
    $mail =  $_POST['mail'];
    $purpose =  $_POST['purpose'];
    $subject = $_POST['subject'];
    $message =  $_POST['message'];
  
    // Prepare the SQL query
    $stmt = $con->prepare("INSERT INTO `contactmessages` (`message_id`, `name`, `email`, `purpose`, `subject`, `message`) VALUES (NULL, ?, ?, ?, ?, ?)");
  
    // Bind parameters to the prepared statement
    $stmt->bind_param("sssss", $name, $mail, $purpose, $subject, $message);
  
    // Execute the query
    $stmt->execute();
  
  
  }
  
